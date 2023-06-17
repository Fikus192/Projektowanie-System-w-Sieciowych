<?php

namespace app\controllers;

use core\App;
use core\Utils;
use core\RoleUtils;
use core\ParamUtils;
use app\forms\LoginForm;
use app\transfer\User;

class LoginCtrl {

    private $form;

    public function __construct() {
        //stworzenie potrzebnych obiektów
        $this->form = new LoginForm();
    }

    private function getParams()
    {
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');
    }

    private function validate() 
    {
        $loginValid = Utils::isLoginValid($this->form->login);
		$passValid = Utils::isPasswordValid($this->form->pass);

        if($loginValid && $passValid)
		{
			$this->validateWithDB();
		}
		

		return (!App::getMessages()->isError() && $loginValid && $passValid);
    }

    private function validateWithDB()
	{
		$data = App::getDB()->select("user", ["pass"], [
            "login" => $this->form->login
        ]);

		if(!empty($data))
		{
            if(strcmp($this->form->pass, $data[0]["pass"]) !== 0) 
            {
                Utils::addErrorMessage("Nieprawidłowe hasło.");
            }

		}
        else 
        {
            Utils::addErrorMessage("Użytkownik nie istnieje w bazie danych.");
        }
	}

    public function action_loginShow() 
    {
        $this->generateView();
    }

    public function action_login() 
    {
        $this->getParams();
        if ($this->validate()) {
            $this->createUser();
            //zalogowany => przekieruj na główną akcję (z przekazaniem messages przez sesję)
            Utils::addInfoMessage('Poprawnie zalogowano do systemu');
            App::getRouter()->forwardTo("homePage");
        }
         else 
        {
            //niezalogowany => pozostań na stronie logowania
            $this->generateView();
        }
    }

    function createUser()
    {
        $data = App::getDB()->select("user", ['id_user', 'login'], [
            "login" => $this->form->login
        ]);

        $user = new User($data);
        $_SESSION['user'] = serialize($user);
        RoleUtils::addRole($user->role);
    }

    public function action_logout() 
    {
        // 1. zakończenie sesji
        session_destroy();
        // 2. idź na stronę główną - system automatycznie przekieruje do strony logowania
        Utils::addInfoMessage('Poprawnie wylogowano z systemu');
        App::getRouter()->forwardTo("homePage");
    }

    private function generateView() 
    {
        App::getSmarty()->assign('page_title','Logowanie');
        App::getSmarty()->assign('form', $this->form); // dane formularza do widoku
        App::getSmarty()->display('LoginView.tpl');
    }

}
