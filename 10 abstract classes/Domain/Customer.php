<?php

namespace Bookstore\Domain;

abstract class Customer extends Person {

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

	// add abstract methods but first BEGIN WITH ADDING
	// abstract class Customer extends Person { ... }
	// it's sole purpose is to make sure the children are correctly implemented
	// we can also specify methods that the children are forced to implement

	// the rest of the methods can stay here

	// what if these abstract methods are not implemented in chidlren? we get an error like this:
	// Customer contains 3 abstract methods and must therefore be declared abstract or implement the remaining methods

	// KEY TO REMEMBER
	//  abstract class is the class that can not be instantiated
	//  since this class contains abstract classes - it cannot be instantiated in init.php
	//  as a result it fails - the solution here is interfaces!

	abstract public function getMonthlyFee();
	abstract public function getAmountToBorrow();
	abstract public function getType();

	// now we will not be able to send any instance of the class Customer, because we cannot instantiate it.
	// That means that all the objects that the checkIfValid method is going to accept are only the children from Customer.
	// declaring abstract methods forces all the children that extend the class to implement them.

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
