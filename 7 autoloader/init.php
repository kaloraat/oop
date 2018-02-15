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

// require_once __DIR__ . '/Domain/Book.php';
// require_once __DIR__ . '/Domain/Customer.php';

// using the constructor
$harry_potter = new Book('jhdskjhsd', "Harry potter and the magicians", "Jack ross");
var_dump($harry_potter->getPrintableTitle());

// isntantiate customer
$first_customer = new Customer(null, "Ryan", "Dhungel", "ryan@kaloraat.com");

var_dump($first_customer->getFullname());

/**
 * autoloading
 */

// so far we have been including files manually
// what happens when we use several classes in several files

// Autoloading is a PHP feature that allows your program to search and load files automatically given some set of predefined rules.

// autoloader is a php function that gets a class name as a parameter and it is expected to load a file