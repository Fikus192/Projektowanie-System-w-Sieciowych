<?php

namespace app\transfer;

use core\App;

class User{
	public $id_user;
	public $login;
	public $role;
	
	public function __construct($date)
	{
		$this->id_user = $date[0]["id_user"];
		$this->login = $date[0]["login"];
		$this->role = $this->getRoleName();	
	}
	
	private function getRoleName()
	{
		$id_role = App::getDB()->select("userrole", "role_id_role", [
            "user_id_user" => $this->id_user
        ]);

		$roleName = App::getDB()->select("role", "name", [
			"id_role" => $id_role
		]);

		return "$roleName[0]";
	}

	// public function __construct($login, $id_user)
	// {
	// 	$this->login = $login;
	// 	$this->id_user = $id_user;		
	// }
	
	// public function add ($role){
	// 	array_push($this->role, $role);
	// }
}