<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\RegisterForm;
use app\transfer\User;

class RegisterCtrl {

    private $form;
    private $id;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new RegisterForm();
    }

    public function validate() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');
        $this->form->repeat_pass = ParamUtils::getFromRequest('repeat_pass');
        $this->form->email = ParamUtils::getFromRequest('email');
        $this->form->phone_number = ParamUtils::getFromRequest('phone_number');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->login))
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty(trim($this->form->login))) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty(trim($this->form->pass))) {
            Utils::addErrorMessage('Nie podano hasła');
        }
        if (empty(trim($this->form->repeat_pass))) {
            Utils::addErrorMessage('Nie potwierdzono hasła');
        }
        if (empty(trim($this->form->email))) {
            Utils::addErrorMessage('Nie podano maila');
        }
        if (empty(trim($this->form->phone_number))) {
            Utils::addErrorMessage('Nie podano numeru telefonu');
        }
        if ($this->form->pass != $this->form->repeat_pass) {
            Utils::addErrorMessage('Hasła nie są takie same, spróbuj jeszcze raz');
        }
        if (App::getDB()->has("user", ["login" => $this->form->login])) {
            Utils::addErrorMessage('Użytkownik istnieje już w bazie');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;

        $hashed_pass = password_hash($this->form->pass, PASSWORD_DEFAULT);

        App::getDB()->insert("user",[
            "login" => $this->form->login,
            "pass" => $hashed_pass,
            "email" => $this->form->email,
            "phone_number" => $this->form->phone_number,
        ]);

        $this->id = App::getDB()->get("user", "id_user",[
            "login" => $this->form->login,
        ]);

        App::getDB()->insert("userrole", [
            "user_id_user" => $this->id,
            "role_id_role" => 2,
        ]);

        return !App::getMessages()->isError();
    }

    public function action_register() {
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            Utils::addInfoMessage('Poprawnie zarejestrowano się do systemu');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo("login");
        } else {
            //niezarejestrowany => pozostań na stronie rejestracji
            $this->generateView();
        }
    }

    public function generateView() {
        App::getSmarty()->assign('page_title','Wypożyczalnia kajaków');
        App::getSmarty()->assign('page_description','System do zarządzania kajakami');
     //   App::getSmarty()->assign('form', $this->form);	
        App::getSmarty()->display('RegisterView.tpl');
    }

}