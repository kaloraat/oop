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
var_dump($first_customer->sayHi());

/**
 * overriding methods
 *
 * what if you have a the same method name in parent class as well as in children class?
 * in that case, the one in the children class would get the priority
 */

// try by creating a method sayName in parent class Person.php
// then use the same method in Customer.php
// then again refer to the parent class implementation of that same method as well as keep the one defined in the children too
