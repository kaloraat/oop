<?php

namespace Bookstore\Domain;
// use trait
use Bookstore\Utils\Unique;

class Person {

	// using the trait for id assignment - comment out the code below
	use Unique;

	// protected visibility
	protected $firstname;
	protected $surname;

	private $email;

	public function __construct($id, $firstname, $surname, $email) {

		$this->setId($id); // refering to trait

		$this->firstname = $firstname;
		$this->surname = $surname;
		$this->email = $email;
	}

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