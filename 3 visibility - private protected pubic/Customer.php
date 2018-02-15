<?php

class Customer {
	private $id;
	public $firstname;
	private $surname;
	private $email;

	public function __construct($id, $firstname, $surname, $email) {
		$this->id = $id;
		$this->firstname = $firstname;
		$this->surname = $surname;
		$this->email = $email;
	}
}

// try instanting in init.php
// so that we can see if we can access its private variables