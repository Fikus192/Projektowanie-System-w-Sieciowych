<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\ParamUtils;
use core\SessionUtils;
use app\forms\RegisterForm;

class RegisterCtrl {

    private $form;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new RegisterForm();
    }

    public function getParams()
    {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');
        $this->form->repeat_pass = ParamUtils::getFromRequest('repeat_pass');
        $this->form->email = ParamUtils::getFromRequest('email');
        $this->form->phone_number = ParamUtils::getFromRequest('phone_number');
    }

    public function validate() {

        $loginValid = Utils::isLoginValid($this->form->login);
        $emailValid = Utils::isEmailValid($this->form->email);

        $isUnique = $this->isUniqueInDB();
        if(!$isUnique)
        {
			Utils::addErrorMessage('Login albo e-mail istnieją w bazie danych.');
        }

        $passwordsTheSame = (strcmp($this->form->pass, $this->form->repeat_pass) === 0);
        $passFirstValid = null;
        if($passwordsTheSame)
        {
            $passFirstValid = Utils::isPasswordValid($this->form->pass);
        }
        else
        {
            Utils::addErrorMessage('Hasła nie są takie same.');
        }

        $phoneNumberValid = Utils::isPhoneNumberValid($this->form->phone_number);
		
		return ($loginValid && $passFirstValid && $passwordsTheSame && $emailValid && $phoneNumberValid && $isUnique);
    }

    private function isUniqueInDB()
    {
        $loginData = App::getDB()->select("user", "id_user", [
            "login" => $this->form->login
        ]);

        $emailData = App::getDB()->select("user", "id_user", [
            "email" => $this->form->email
        ]);

        return (empty($loginData) && empty($emailData));
    }

    private function insertToDB()
    {

        App::getDB()->insert("user", [
            "login" => $this->form->login,
            "pass" => $this->form->pass,
            "email" => $this->form->email,
            "phone_number" => $this->form->phone_number
        ]);

        App::getDB()->insert("userrole", [
            "user_id_user" => App::getDB()->id(),
            "role_id_role" => Utils::getIdRole("user")
        ]);
	}

    public function action_register() 
    {
        $this->getParams();

        if ($this->validate()) 
        {
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            $this->insertToDB();
            Utils::addInfoMessage('Poprawnie zarejestrowano się do systemu');
            SessionUtils::storeMessages();
            App::getRouter()->forwardTo("homePage");
        } 
        else 
        {
            //niezarejestrowany => pozostań na stronie rejestracji
            $this->generateView();
        }
    }

    public function action_registerShow()
    {
		$this->generateView();
	}

    public function generateView() {
        App::getSmarty()->assign('page_title','Rejestracja');
        App::getSmarty()->assign('page_description','System do zarządzania kajakami');
        App::getSmarty()->assign('form', $this->form);	
        App::getSmarty()->display('RegisterView.tpl');
    }

}
