<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\LoginForm;
use app\transfer\User;

class LoginCtrl {

    private $form;
    private $id_user;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->role = ParamUtils::getFromRequest('role');
        $this->form->pass = ParamUtils::getFromRequest('pass');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->login))
            return false;
        if (!isset($this->form->role))
            return false;
        if (!isset($this->form->pass))
            return false;   
            
        if (App::getMessages()->isError())
            return false;

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty(trim($this->form->login))) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty(trim($this->form->pass))) {
            Utils::addErrorMessage('Nie podano hasła');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;

        // sprawdzenie, czy dane logowania poprawne
        // (takie informacje najczęściej przechowuje się w bazie danych)
        if ($this->form->login == App::getDB()->get("user","login", ["login" => $this->form->login])) {
            if(password_verify($this->form->pass,App::getDB()->get("user","pass", ["login" => $this->form->login]))){
                $this->id_user = App::getDB()->get("user","id_user", ["login" => $this->form->login]);
                $user = new User($this->form->login, $this->id_user);
                $role = App::getDB()->select("role", ["[><]userrole" => ["role.id_role" => "role_id_role"],
                "[><]user" => ["userrole.user_id_user" => "id_user"]],["role.name", "isActive"], ["user.login" => $this->form->login]);

                $date = date("Y-m-d h:i:s"); // aktualny czas
                foreach($role as $r){
                    if($r["isActive"] != 0){
                        $user->add($r["name"]);
                        App::getDB()->update("role", ["isActive" => $date], ["name" =>$r["name"]]);
                    }
                }
                foreach($user->role as $u){
                    RoleUtils::addRole($u);
                }

                SessionUtils::storeObject('user', $user);
                } else {
                    Utils::addErrorMessage('Niepoprawny login lub hasło');
                }
            } else {
                Utils::addErrorMessage('Niepoprawny login lub hasło');
            }   

        return !App::getMessages()->isError();
    }

    public function action_loginShow() {
        $this->generateView();
    }

    public function action_login() {
        if ($this->validate()) {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            Utils::addInfoMessage('Poprawnie zalogowano do systemu');
            SessionUtils::storeMessages();
            App::getRouter()->redirectTo('searchCanoe');
        } else {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }

    public function action_logout() {
        // 1. zakończenie sesji
        session_destroy();
        // 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
        Utils::addInfoMessage('Poprawnie wylogowano z systemu');
        App::getRouter()->redirectTo('login');
    }

    public function generateView() {
        App::getSmarty()->assign('page_title','Wypożyczalnia kajaków');
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('LoginView.tpl');
    }

}
