<?php

use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;
// use new ones customer/Basic and Premium
use Bookstore\Domain\Customer\Basic;
use Bookstore\Domain\Customer\Premium;

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
var_dump($basic_customer->getFirstname());

// once Customer implements another interface 'Payer'
var_dump($basic_customer->pay(1000.00));
var_dump($basic_customer->isExtentOfTaxes());

// lets test with premium too
$premium_customer = new Premium(null, "Michael", "Jackson", "mj@gmail.com");
var_dump($premium_customer->isExtentOfTaxes());

// $customer = new Customer(7, "Ryan", "Dhungel", "ryan@kaloraat.com");
// var_dump(checkIfValid($customer, $harry_potter)); // instantiate customer - it fails - because abstract class Person { ... } can not be instantiated

/**
 * interfaces
 */

// So, why would someone use an interface if we could always use an abstract class that not only enforces the implementation of methods, but also allows inheriting code as well?

// The reason is that you can only 'extend' (using abstract) from one class, but you can 'implement' (using interface) multiple instances at the same time.

// Imagine that you had another interface that defined payers.
// This could identify someone that has the ability to pay something, regardless of what it is.

// move-add to Payer.php
