<?php

/**
 * visibility
 */

// The private visibility means that the properties and methods of the class can not be accessed by outside
// The protected visibility means that the properties and methods of the class can be accessed only by its children class
// public visibility means that the properties and methods of the class can be accessed by outside

/**
 * lets move Book class on its own
 * lets create init.php
 * lets also create Customer class
 *
 * just leave this file as is because its already named Book.php
 * copy the instantiated bit of code from below and put in init.php
 */

class Book {
	public $isbn;
	public $title;
	public $author;
	public $available;

	public function __construct($isbn, string $title, string $author, int $available = 0) {
		// it runs as soon as you instantiate it by php behind the scene
		$this->isbn = $isbn;
		$this->title = $title;
		$this->author = $author;
		$this->available = $available;
	}

	public function getPrintableTitle() {
		$result = $this->title . ' - ' . ' by ' . $this->author;
		if (!$this->available) {
			$result .= 'Not available';
		}
	}

	public function getCopy() {
		if ($this->available < 1) {
			return false;
		} else {
			$this->available--;
			return true;
		}
	}
}
