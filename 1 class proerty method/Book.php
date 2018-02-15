<?php

/**
 * properties and methods
 */

class Book {
	// properties are like variables inside the class
	public $isbn;
	public $title;
	public $author;
	public $available;

	// method - are function defined inside a class
	// these methods can use the properties of the object that invoked them
	public function getPrintableTitle() {
		// $this represets the object itself, you can access properties and methods using $this
		$result = $this->title . ' - ' . ' by ' . $this->author;
		if (!$this->available) {
			$result .= 'Not available';
		}
	}

	// lets create another method that will update the values of the current object
	public function getCopy() {
		if ($this->available < 1) {
			return false;
		} else {
			$this->available--;
			return true;
		}
	}
}

/**
 * Instance
 *
 * You can create a class and use(instantiate) many times in your program. When the same class is instantiated many times, their properties and methods will produce different result based on the new instance.
 */

$harry_potter = new Book();
$harry_potter->isbn = 98937298329;
$harry_potter->title = "Harry potter and the magicians";
$harry_potter->author = "Jacck ross";
$harry_potter->available = 100;

if ($harry_potter->getCopy()) {
	echo 'Here is your copy of ' . $harry_potter->title . '<br>';
} else {
	echo 'Sorry its gone!';
}

var_dump($harry_potter);
