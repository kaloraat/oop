<?php

class Customer {

	// add a static property - then modify the constructor - then create a static getLastId method
	private static $lastId = 0;

	private $id;
	private $firstname;
	private $surname;
	private $email;

	public function __construct($id, $firstname, $surname, $email) {
		// $this->id = $id;

		if ($id == null) {
			$this->id = ++self::$lastId; // create getId accessor so that we can see
		} else {
			$this->id == $id;
			if ($id > self::$lastId) {
				self::$lastId = $id;
			}
		}

		$this->firstname = $firstname;
		$this->surname = $surname;
		$this->email = $email;
	}

	// static method
	public static function getLastId() {
		return self::$lastId;
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
