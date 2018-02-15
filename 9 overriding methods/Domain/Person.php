<?php

namespace Bookstore\Domain;

class Person {

	// protected visibility
	protected $firstname;
	protected $surname;

	// constructor
	public function __construct($firstname, $surname) {
		$this->firstname = $firstname;
		$this->surname = $surname;
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
}