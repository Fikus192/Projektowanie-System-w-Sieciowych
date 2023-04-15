<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\Validator;
use app\forms\CanoeEditForm;

class CanoeEditCtrl {

    private $form; //dane formularza

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new CanoeEditForm();
    }

    // Walidacja danych przed zapisem (nowe dane lub edycja).
    public function validateSave() {
        //0. Pobranie parametrów z walidacją
        $this->form->id = ParamUtils::getFromRequest('id_canoe', true, 'Błędne wywołanie aplikacji');
        $this->form->type = ParamUtils::getFromRequest('type', true, 'Błędne wywołanie aplikacji');
        $this->form->model = ParamUtils::getFromRequest('model', true, 'Błędne wywołanie aplikacji');
        $this->form->production_date = ParamUtils::getFromRequest('production_date', true, 'Błędne wywołanie aplikacji');
        $this->form->price = ParamUtils::getFromRequest('price', true, 'Błędne wywołanie aplikacji');

        if (App::getMessages()->isError())
            return false;

        // 1. sprawdzenie czy wartości wymagane nie są puste
        if (empty(trim($this->form->type))) {
            Utils::addErrorMessage('Wprowadź typ');
        }
        if (empty(trim($this->form->model))) {
            Utils::addErrorMessage('Wprowadź model');
        }
        if (empty(trim($this->form->production_date))) {
            Utils::addErrorMessage('Wprowadź datę produkcji');
        }
        if (empty(trim($this->form->price))) {
            Utils::addErrorMessage('Wprowadź cenę wypożyczenia');
        }

        if (App::getMessages()->isError())
            return false;

        // 2. sprawdzenie poprawności przekazanych parametrów

        $d = \DateTime::createFromFormat('Y-m-d', $this->form->production_date);
        if ($d === false) {
            Utils::addErrorMessage('Zły format daty. Przykład: 2015-12-20');
        }

        return !App::getMessages()->isError();
    }

    //validacja danych przed wyswietleniem do edycji
    public function validateEdit() {
        //pobierz parametry na potrzeby wyswietlenia danych do edycji
        //z widoku listy osób (parametr jest wymagany)
        $this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
        return !App::getMessages()->isError();
    }

    public function action_CanoeNew() {
        $this->generateView();
    }

    //wysiweltenie rekordu do edycji wskazanego parametrem 'id'
    public function action_CanoeEdit() {
        // 1. walidacja id osoby do edycji
        if ($this->validateEdit()) {
            try {
                // 2. odczyt z bazy danych osoby o podanym ID (tylko jednego rekordu)
                $record = App::getDB()->get("Canoe", "*", [
                    "id_canoe" => $this->form->id
                ]);
                // 2.1 jeśli osoba istnieje to wpisz dane do obiektu formularza
                $this->form->id = $record['id_canoe'];
                $this->form->type = $record['type'];
                $this->form->model = $record['model'];
                $this->form->production_date = $record['production_date'];
                $this->form->price = $record['price'];
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Wygenerowanie widoku
        $this->generateView();
    }

    public function action_CanoeDelete() {
        // 1. walidacja id osoby do usuniecia
        if ($this->validateEdit()) {

            try {
                // 2. usunięcie rekordu
                App::getDB()->delete("Canoe", [
                    "id_canoe" => $this->form->id
                ]);
                Utils::addInfoMessage('Pomyślnie usunięto rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił błąd podczas usuwania rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }

        // 3. Przekierowanie na stronę listy osób
        App::getRouter()->forwardTo('searchCanoe');
    }

    public function action_CanoeSave() {

        // 1. Walidacja danych formularza (z pobraniem)
        if ($this->validateSave()) {
            // 2. Zapis danych w bazie
            try {

                //2.1 Nowy rekord
                if ($this->form->id == '') {
                    //sprawdź liczebność rekordów - nie pozwalaj przekroczyć 20
                    $count = App::getDB()->count("Canoe");
                    if ($count <= 20) {
                        App::getDB()->insert("Canoe", [
                            "type" => $this->form->type,
                            "model" => $this->form->model,
                            "production_date" => $this->form->production_date,
                            "price" => $this->form->price
                        ]);
                    } else { //za dużo rekordów
                        // Gdy za dużo rekordów to pozostań na stronie
                        Utils::addInfoMessage('Ograniczenie: Zbyt dużo rekordów. Aby dodać nowy usuń wybrany wpis.');
                        $this->generateView(); //pozostań na stronie edycji
                        exit(); //zakończ przetwarzanie, aby nie dodać wiadomości o pomyślnym zapisie danych
                    }
                } else {
                    //2.2 Edycja rekordu o danym ID
                    App::getDB()->update("Canoe", [
                        "type" => $this->form->type,
                        "model" => $this->form->model,
                        "production_date" => $this->form->production_date,
                        "price" => $this->form->price
                            ], [
                        "id_canoe" => $this->form->id
                    ]);
                }
                Utils::addInfoMessage('Pomyślnie zapisano rekord');
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

            // 3b. Po zapisie przejdź na stronę listy osób (w ramach tego samego żądania http)
            App::getRouter()->forwardTo('searchCanoe');
        } else {
            // 3c. Gdy błąd walidacji to pozostań na stronie
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('form', $this->form); // dane formularza dla widoku
        App::getSmarty()->display('CanoeEdit.tpl');
    }

}
