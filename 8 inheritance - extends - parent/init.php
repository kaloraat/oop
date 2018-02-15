<?php

use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;

// autoloader function to autoload classes
function autoloader($classname) {
	$lastSlash = strpos($classname, '\\') + 1;
	$classname = substr($classname, $lastSlash);
	$directory = str_replace('\\', '/', $classname);
	$filename = __DIR__ . '/' . $directory . '.php';
	require_once $filename;
}
spl_autoload_register('autoloader');

// using the constructor
$harry_potter = new Book('jhdskjhsd', "Harry potter and the magicians", "Jack ross");
var_dump($harry_potter->getPrintableTitle());

// isntantiate customer
$first_customer = new Customer(null, "Ryan", "Dhungel", "ryan@kaloraat.com");
var_dump($first_customer->getFullname());

/**
 * inheritance - extends / parent
 */

// inheritance is the ability to pass the implementation of the class from parent class to children class using 'extends' keyword
// when a class extends from another class, it gets all the properties and methods that are not defined as private

// consider customer class
// it contains firstname, surname, email and id

// customer is actually a specific type of person
// there can be other type of person too such as librarian or guest
// it makes sense if we create a person class and make the customer class extend from it