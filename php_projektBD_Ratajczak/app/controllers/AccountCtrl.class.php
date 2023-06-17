<?php

namespace app\controllers;

use app\forms\RegisterForm;

use core\App;
use core\ParamUtils;
use core\Utils;

class AccountCtrl 
{
	private $form;

	public function __construct()
    {
		$this->form = new RegisterForm();
	}
	
	public function action_accountShow()
    {
		$this->generateView();
	}

    public function action_accountUpdate()
    {
        $this->getParams();

		if ($this->validate()) 
        {	
            if($this->updateDB())
            {
                Utils::addInfoMessage('Konto zostało zaktualizowane.');
            }
		}
        $this->generateView();
    }

	private function getParams()
	{
        $user = unserialize($_SESSION['user']);
        $this->form->login = $user->login;
		$this->form->pass = ParamUtils::getFromRequest('pass');
		$this->form->repeat_pass = ParamUtils::getFromRequest('repeat_pass');
		$this->form->email = ParamUtils::getFromRequest('email');
		$this->form->phone_number = ParamUtils::getFromRequest('phone_number');
	}

    private function isUniqueInDB()
    {
        $emailData = App::getDB()->select("user", "id_user", [
            "email" => $this->form->email
        ]);

        return empty($emailData);
    }

    private function isPasswordValid()
    {
        if(!empty($this->form->pass))
        {
            $passwordsTheSame = (strcmp($this->form->pass, $this->form->repeat_pass) === 0);
            if($passwordsTheSame)
            {
                return Utils::isPasswordValid($this->form->pass);
            }
            else
            {
                Utils::addErrorMessage('Hasła nie są zgodne.');
                return false;
            }
            
        }
        else
        {
            return true;
        }
    }

    private function isEmailValid()
    {
        if(!empty($this->form->email))
        {
            if(Utils::isEmailValid($this->form->email))
            {
                if($this->isUniqueInDB())
                {
                    return true;
                }
                else
                {
                    Utils::addErrorMessage('Adres e-mail istnieje już w bazie danych.');
                    return false;
                }
            }
            else
            {
                return false;
            }
        }
        else
        {
            return true;
        }
    }

    private function isPhoneNumberValid()
    {
        if(!empty($this->form->phone_number))
        {
            return Utils::isPhoneNumberValid($this->form->phone_number);
        }
        else
        {
            return true;
        }
    }

	private function validate() 
    {
        $passValid = $this->isPasswordValid();
        $emailValid = $this->isEmailValid();
        $numberValid = $this->isPhoneNumberValid();

		return ($passValid && $emailValid && $numberValid);
	}

    private function updateDB()
    {
        $updated = false;
        if(!empty($this->form->pass))
        {
            App::getDB()->update("user", [
                "pass" => $this->form->pass,
            ], ["login" => $this->form->login]);

            $updated = true;
        }

        if(!empty($this->form->email))
        {
            App::getDB()->update("user", [
                "email" => $this->form->email,
            ], ["login" => $this->form->login]);

            $updated = true;
        }

        if(!empty($this->form->phone_number))
        {
            App::getDB()->update("user", [
                "phone_number" => $this->form->phone_number,
            ], ["login" => $this->form->login]);

            $updated = true;
        }

        return $updated;
	}

    private function generateView(){
		App::getSmarty()->assign('page_title','Ustawienia Konta');
		App::getSmarty()->assign('form',$this->form);

		App::getSmarty()->display('AccountView.tpl');
	}
}
