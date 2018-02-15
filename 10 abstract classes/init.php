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

// once basic and premium classes are added
// type hinting in the below example works for any class that extends Customer or is the instance of Customer itself
// in this case its the basic and premium ones - they are extending
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

// instantiate customer - it fails
// Call to undefined method Bookstore\Domain\Customer::getAmountToBorrow()

// that's because Customer class does not know about any chickIfValid() method
// it is only in child classes that extended Customer

// anothe problem is that - we might not want to depend on children classes to define methods
// that parent class does not know anything about

// the solution here is abstract classes

// it is as simple as adding abstract keyword before the function name
// in the parent class - in our case Customer

// this ensures that the children will implement these methods for sure

// add the abstract classes in Customer class
$customer = new Customer(7, "Ryan", "Dhungel", "ryan@kaloraat.com");
var_dump(checkIfValid($customer, $harry_potter)); // instantiate customer - it fails - because abstract class Person { ... } can not be instantiated

// also show at the end - make the basic class completly empty and still you can use methods of Customer - becuase it is extending...

/**
 * abstract classes
 */

// you can extend from only one parent class each time
// customer can only extends from person

// what if we want make this hierarchic tree more complex
// we can create children classes that extends from Customer - for example Basic Customer | Premium Customer
// as a result those classes (Basic and Premium) will extends from Person too
// because when they extend Customer, they extedn to Person too becuase Customer is extending from Person :)

// lets create two types of customer - Basic and Premium
// they will have the same properties and methods of Customer (and of Person too because Customer extends from Person)

// src/Domain/Customer/Basic.php
// Basic.php