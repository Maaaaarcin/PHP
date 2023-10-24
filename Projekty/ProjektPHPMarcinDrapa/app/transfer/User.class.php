<?php

namespace app\transfer;

class User{
	public $id;
	public $login;
	public $role;
	public $points;
	
	public function __construct($id, $login, $role, $points){
		$this->id = $id;
		$this->login = $login;
		$this->role = $role;		
		$this->points = $points;		
	}	
}