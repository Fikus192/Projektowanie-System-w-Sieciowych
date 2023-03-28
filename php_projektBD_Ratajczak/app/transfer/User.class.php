<?php

namespace app\transfer;

class User{
	public $login;
	public $role;
	public $ID_User;
	
	public function __construct($login, $role, $ID_User){
		$this->login = $login;
		$this->role = $role;
		$this->ID_User = $ID_User;		
	}	
}