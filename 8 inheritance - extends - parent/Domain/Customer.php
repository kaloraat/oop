<?php

namespace Bookstore\Domain;

// lets extend from person class
// both are in the same namespace so no need to use 'use'

class Customer extends Person {

	// add a static property - then modify the constructor - then create a static getLastId method
	private static $lastId = 0;

	private $id;
	// private $firstname;
	// private $surname;
	private $email;

	// we have duplication of code in the constructor
	// you can force php to use the parent class's implementation of method than redeefining in child
	// refer to the parent's implementation inside this constructor below

	public function __construct($id, $firstname, $surname, $email) {
		// $this->id = $id;
		parent::__construct($firstname, $surname);
		if ($id == null) {
			$this->id = ++self::$lastId; // create getId accessor so that we can see
		} else {
			$this->id == $id;
			if ($id > self::$lastId) {
				self::$lastId = $id;
			}
		}
		// we are extending from Person so you can still use $this->firstname
		$this->firstname = $firstname;
		$this->surname = $surname;
		$this->email = $email;
	}

	// static method
	public static function getLastId() {
		return self::$lastId;
	}

	// // accessor - getter method
	// public function getFirstname() {
	// 	return $this->firstname;
	// }

	// // accessor - getter method
	// public function getSurname() {
	// 	return $this->surname;
	// }

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
