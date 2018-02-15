<?php

class Customer {
	private $id;
	private $firstname;
	private $surname;
	private $email;
	// public $fullname;
	// private $fullname;

	public function __construct($id, $firstname, $surname, $email) {
		$this->id = $id;
		$this->firstname = $firstname;
		$this->surname = $surname;
		$this->email = $email;
	}

	// accessor - getter method
	public function getFirstname() {
		return $this->firstname;
	}

	// accessor - getter method
	public function getSurname() {
		return $this->surname;
	}

	// accessor - getter method
	public function getFullname() {
		return strtoupper($this->firstname . ' ' . $this->surname);
	}

	// accessor - getter method
	public function getEmail() {
		return $this->email;
	}

	// mutator - setter method
	public function setEmail(string $email) {
		$this->email = $email;
	}
}

// try instanting in init.php
// so that we can see if we can access its private variables