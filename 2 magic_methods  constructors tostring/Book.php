<?php

/**
 * constructors - magic methods
 * default arguments, typehinting
 */

// instead of writting multiple lines of code to instantiate each object we can use constructors

/**
 * what is constructor
 *
 * construtors and other magic methods are pre-defined class methods that PHP executes under some events such as instantiating a new object using __constructor or convert to string using __toString magic methods
 *
 */

class Book {
	public $isbn;
	public $title;
	public $author;
	public $available;

	public function __construct($isbn, $title, $author, $available) {
		// default value
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

	// // example of __toString()
	// public function __toString() {
	// 	$result = $this->title . ' - ' . ' by ' . $this->author;
	// 	if (!$this->available) {
	// 		$result .= 'Not available';
	// 	}
	// 	return $result;
	// }

	public function getCopy() {
		if ($this->available < 1) {
			return false;
		} else {
			$this->available--;
			return true;
		}
	}
}

// using the constructor
$harry_potter = new Book(93989349, "Harry potter and the magicians", "Jack ross", 100);

/**
 * show without passing available number and show the error
 * fix by using default argument
 */

/**
 * show typehinting string int etc
 * show the error when you dont use type hint and pass string to isbn instead of int
 */

/**
 * With PHP 7, you can be more specific about what arguments function are getting and what it is returning.
 * You can—always optionally— specify the type of argument that the function needs (type hinting),
 * and the type of result the function will return (return type).
 */

// // show __toString()
// echo $harry_potter;

if ($harry_potter->getCopy()) {
	echo 'Here is your copy of ' . $harry_potter->title . '<br>';
} else {
	echo 'Sorry its gone!';
}

var_dump($harry_potter);
