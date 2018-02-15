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

// POLYMORPHISM
// This piece of code (typehint Customer) does not really mind if the payer is a customer, a maganer, basic or premium or someone who has nothing to do with the bookstore.
// The only thing that it cares about is that the payer has the ability to pay. The function could be as follows:
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
// You could send basic or premium customers to this function, and the behavior will be different.
// Basic or Premium - both implement Payer interface so type hinting Payer works for both basic/premium

// go down after the other var_dump and test processPayment()

// using the constructor
$harry_potter = new Book('jhdskjhsd', "Harry potter and the magicians", "Jack ross", 12);
// var_dump($harry_potter->getPrintableTitle());

// isntantiate basic customer - it works
$basic_customer = new Basic(5, 'Zen', 'Dhungel', 'zen@gmail.com');
var_dump(checkIfValid($basic_customer, $harry_potter));
var_dump($basic_customer->getType()); // ADDED JUST TO SHOW SOME TEXT ON SCREEN
var_dump($basic_customer->getFirstname());

$premium_customer = new Premium(null, 'John', 'Dhungel', 'john@gmail.com');
// testing process payment
var_dump(processPayment($basic_customer, 100.00)); // you gotta pay tax mate - FOR BASIC
var_dump(processPayment($premium_customer, 100.00)); // Dont worry about paying tax - FOR PREMIUM
// $amount *= 1.50; - for any other type rather than BASIC or PREMIUM which we dont have in our app yet

// you can also see the instance of
var_dump($basic_customer instanceof Basic); // true
var_dump($premium_customer instanceof Premium); // true

var_dump($basic_customer instanceof Premium); // false
var_dump($premium_customer instanceof Basic); // false
/**
 * polymorphism
 */

/**
 * Polymorphism is an OOP feature that allows us to work with different classes that implement the same interface.
 */

/**
 * Imagine that we have a function that, given a payer, checks whether it is exempt of taxes or not, and makes it pay some amount of money.
 */

/**
 * This piece of code does not really mind if the payer is a customer, a maganer, or someone who has nothing to do with the bookstore.
 */

/**
 * The only thing that it cares about is that the payer has the ability to pay. The function could be as follows:
 * first remove the existing  last 4 lines of code that i used earlier to check isExtentOfTaxes()
 */
