<?php

namespace Bookstore\Domain;

class Person {

	// protected visibility
	protected $firstname;
	protected $surname;

	private static $lastId = 0;

	private $id;
	private $email;

	public function __construct($id, $firstname, $surname, $email) {
		// $this->id = $id;
		// parent::__construct($firstname, $surname);
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

	// // constructor
	// public function __construct($firstname, $surname) {
	// 	$this->firstname = $firstname;
	// 	$this->surname = $surname;
	// }

	// methods
	public function getFirstname() {
		return $this->firstname;
	}

	public function getSurname() {
		return $this->surname;
	}

	public function sayHi() {
		return 'Hi whats up? ' . $this->firstname;
	}

	// static method
	public static function getLastId() {
		return self::$lastId;
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