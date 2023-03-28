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
    private $ID_User;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    public function validate() {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');

        //nie ma sensu walidować dalej, gdy brak parametrów
        if (!isset($this->form->login))
            return false;
        if (!isset($this->form->pass))
            return false;    

        // sprawdzenie, czy potrzebne wartości zostały przekazane
        if (empty($this->form->login)) {
            Utils::addErrorMessage('Nie podano loginu');
        }
        if (empty($this->form->pass)) {
            Utils::addErrorMessage('Nie podano hasła');
        }

        //nie ma sensu walidować dalej, gdy brak wartości
        if (App::getMessages()->isError())
            return false;

        // sprawdzenie, czy dane logowania poprawne
        // (takie informacje najczęściej przechowuje się w bazie danych)
        if ($this->form->login == App::getDB()->get("user","login", ["login" => $this->form->login])) {
            if(password_verify($this->form->pass,App::getDB()->get("user","password", ["login" => $this->form->login]))){
                $this->ID_User = App::getDB()->get("user","ID_User", ["login" => $this->form->login]);
                $user = new User($this->form->login, $this->form->pass, $this->ID_User);
                $role = App::getDB()->select("role", ["[><]UserRole" => ["role.ID_role" => "role_ID_Role"],
                "[><]user" => ["UserRole.User_ID_User" => "ID_User"]],["role.name", "isActive"], ["user.login" => $this->form->login]);

                $date = date("Y-m-d h:i:s"); // aktualny czas
                foreach($role as $r){
                    if($r["isActive"] != 0){
                        $user->add($r["name"]);
                        App::getDB()->update("role", ["name" =>$r["name"]]);
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

        if ($this->form->login == "admin" && $this->form->pass == "admin") {
                RoleUtils::addRole('admin');
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
            App::getRouter()->redirectTo("canoeList");
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
