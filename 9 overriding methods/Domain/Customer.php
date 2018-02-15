<?php

namespace Bookstore\Domain;

class Customer extends Person {

	private static $lastId = 0;

	private $id;
	private $email;

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

	// redeclare sayHi - also declared in the parent - Person class
	public function sayHi() {
		return 'howdy ' . $this->firstname . '(((<=>)))' . parent::sayHi(); // refering to parent implementation of the same method;
	}
}
