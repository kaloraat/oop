<?php

namespace Bookstore\Domain;

// any other class can extend this class
// for example Custoemr, Manager, Guest class
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
}