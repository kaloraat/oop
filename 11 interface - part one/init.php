<?php

use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;
// use new ones customer/Basic and Premium
use Bookstore\Domain\Customer\Basic;

// autoloader function to autoload classes
function autoloader($classname) {
	$lastSlash = strpos($classname, '\\') + 1;
	$classname = substr($classname, $lastSlash);
	$directory = str_replace('\\', '/', $classname);
	$filename = __DIR__ . '/' . $directory . '.php';
	require_once $filename;
}
spl_autoload_register('autoloader');

function checkIfValid(Customer $customer, $books) {
	// type hint Customer class
	return $customer->getAmountToBorrow() >= count($books);
}

// using the constructor
$harry_potter = new Book('jhdskjhsd', "Harry potter and the magicians", "Jack ross", 12);
// var_dump($harry_potter->getPrintableTitle());

// isntantiate basic customer - it works
$basic_customer = new Basic(5, 'Zen', 'Dhungel', 'zen@gmail.com');
var_dump(checkIfValid($basic_customer, $harry_potter));
var_dump($basic_customer->getType()); // ADDED JUST TO SHOW SOME TEXT ON SCREEN

// $customer = new Customer(7, "Ryan", "Dhungel", "ryan@kaloraat.com");
// var_dump(checkIfValid($customer, $harry_potter)); // instantiate customer - it fails - because abstract class Person { ... } can not be instantiated

/**
 * interfaces
 */

// An interface is an OOP element that groups a set of function declarations without implementing them,
// that is, it specifies the name, return type, and arguments, but not the block of code.
// Interfaces are different from abstract classes, since they cannot contain any implementation at all,
// whereas abstract classes could mix both method definitions and implemented ones.

// The purpose of interfaces is to state what a class can do (pre-defined methods), but not how it is done.

// now that we know that, interface cannot contain any 'proeprties' and 'methods other than the ones to implement'
//  lets move the code from customer to person class leaving only this...
