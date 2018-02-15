<?php

use Bookstore\Domain\Book;
use Bookstore\Domain\Customer;
// use new ones customer/Basic and Premium
use Bookstore\Domain\Customer\Basic;
use Bookstore\Domain\Customer\Premium;
// use manager
use Bookstore\Domain\Manager;

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

function processPayment(Customer $customer, float $amount) {
	// import Payer on top 'use'
	if ($customer->isExtentOfTaxes()) {
		// echo "You are a lucky one..";
		return $customer->isExtentOfTaxes();
	} else {
		$amount *= 1.50;
	}
	$customer->pay($amount);
}

// using the constructor
$harry_potter = new Book('jhdskjhsd', "Harry potter and the magicians", "Jack ross", 12);
// var_dump($harry_potter->getPrintableTitle());

// isntantiate basic customer - it works
$basic_customer = new Basic(5, 'Zen', 'Dhungel', 'zen@gmail.com');
var_dump(checkIfValid($basic_customer, $harry_potter));
var_dump($basic_customer->getType()); // ADDED JUST TO SHOW SOME TEXT ON SCREEN
var_dump($basic_customer->getFirstname());

$premium_customer = new Premium(null, 'John', 'Dhungel', 'john@gmail.com'); // testing trait - passing id to null
// testing process payment
var_dump(processPayment($basic_customer, 100.00)); // you gotta pay tax mate - FOR BASIC
var_dump(processPayment($premium_customer, 100.00)); // Dont worry about paying tax - FOR PREMIUM

var_dump($basic_customer->getId()); // 5
var_dump($premium_customer->getId()); // 6

// TESTING TRAIT PART TWO

$manager = new Manager(); // 'use' manager on top
$manager->sign(); // sign is not in actual Manager but in the trait that is being used there

// trait second part testing
$manager->makeSign(); // signing in communicator - IN COMMUNICATOR

/**
 * what happens if two traits containt the same method or contains method that is already in class?
 */

// create a trait Contract - Utils/Contract.php
