<?php

namespace app\controllers;

use app\forms\RegisterForm;

use core\App;
use core\ParamUtils;
use core\Utils;

class AccountManagmentCtrl 
{
    private $data;
    private $id_user;
    private $form;

	public function __construct()
    {
        $this->form = new RegisterForm();
	}
	
	public function action_manageAccountsShow()
    {
        $this->getData();
		$this->generateAccountsManagementView();
	}

    public function action_addUserShow()
    {
		$this->generateAddUserView();
	}

    public function action_addUser()
    {
        $this->getParamsForNewUser();

		if ($this->validate()) 
        {	
            $this->insertToDB();
			Utils::addInfoMessage('Dodano nowego użytkownika.');
            $this->action_manageAccountsShow();
		}
        else
        {
            $this->generateAddUserView();
        }
	}

    public function action_resetPassword()
    {
        $this->getParamsForModification();

        $user = unserialize($_SESSION['user']);
        App::getDB()->update("user", [
            "pass" => 'xxxxxx',
            "modification_id_user" => $user->id_user,
        ], ["id_user" => $this->id_user]);

		$this->action_manageAccountsShow();
	}

    public function action_deleteUser()
    {
        $this->getParamsForModification();

        $rentalsId = App::getDB()->select("rent", "id_rent", [
            "rent_id_user" => $this->id_user]);
        
        if(empty($rentalsId))
        {
            App::getDB()->delete("user", ["id_user" => $this->id_user]);
            Utils::addInfoMessage("Usunięto użytkownika o ID: $this->id_user");
        }
        else
        {
            Utils::addErrorMessage("ID użytkownika: $this->id_user - nie można usunąć użytkownika, ponieważ posiada aktywne wypożyczenia.");
        }


		$this->action_manageAccountsShow();
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

    private function validate() 
    {
        $loginValid = Utils::isLoginValid($this->form->login);
        $emailValid = Utils::isEmailValid($this->form->email);

        $isUnique = $this->isUniqueInDB();
        if(!$isUnique)
        {
			Utils::addErrorMessage('Login albo adres e-mail istnieją już w bazie danych.');
        }

        $passwordsTheSame = (strcmp($this->form->pass, $this->form->repeat_pass) === 0);
        $passFirstValid = null;
        if($passwordsTheSame)
        {
            $passFirstValid = Utils::isPasswordValid($this->form->pass);
        }
        else
        {
            Utils::addErrorMessage('Hasła są niezgodne.');
        }

        $phoneNumberValid = Utils::isPhoneNumberValid($this->form->phone_number);
		
		return ($loginValid && $passFirstValid && $passwordsTheSame && $emailValid && $phoneNumberValid && $isUnique);
	}

    private function getData(){
        $ids = App::getDB()->select("userrole", 'user_id_user', 
            [
                "role_id_role[!]" => '1'
            ]
        );

        if(!empty($ids))
        {
            $this->data = App::getDB()->select("user", 
            ['id_user', 'login', 'pass', 'email', 'phone_number'], 
            [
                'id_user' => $ids
            ]
        );
        }
	}

    private function getParamsForModification()
	{
		$this->id_user = ParamUtils::getFromRequest('buttonValue');
	}

    private function getParamsForNewUser()
	{
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->pass = ParamUtils::getFromRequest('pass');
        $this->form->repeat_pass = ParamUtils::getFromRequest('repeat_pass');
        $this->form->email = ParamUtils::getFromRequest('email');
        $this->form->phone_number = ParamUtils::getFromRequest('phone_number');
	}

    private function insertToDB()
    {
        $user = unserialize($_SESSION['user']);
        
        App::getDB()->insert("user", [
            "login" => $this->form->login,
            "pass" => $this->form->pass,
            "email" => $this->form->email,
            "phone_number" => $this->form->phone_number,
            "creation_id_user" => $user->id_user
        ]);

        App::getDB()->insert("userrole", [
            "user_id_user" => App::getDB()->id(),
            "role_id_role" => Utils::getIdRole("user")
        ]);
	}

    private function generateAccountsManagementView(){
		App::getSmarty()->assign('page_title','Zarządzanie kontami');
        App::getSmarty()->assign('data',$this->data);
		App::getSmarty()->display('ManageAccountsView.tpl');
	}

    private function generateAddUserView(){
		App::getSmarty()->assign('page_title','Wprowadzanie nowego użytkownika');
		App::getSmarty()->display('NewUserView.tpl');
	}
}
