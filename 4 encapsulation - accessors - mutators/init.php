<?php

// lets require classes
require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/Customer.php';

// using the constructor
$harry_potter = new Book('jhdskjhsd', "Harry potter and the magicians", "Jack ross");
var_dump($harry_potter->title);
// if ($harry_potter->getCopy()) {
// 	echo 'Here is your copy of ' . $harry_potter->title . '<br>';
// } else {
// 	echo 'Sorry its gone!';
// }

// var_dump($harry_potter);

// isntantiate customer
$first_customer = new Customer(1, "Ryan", "Dhungel", "ryan@kaloraat.com");

var_dump($first_customer->getFirstname()); // use accessor method to get the firstname
var_dump($first_customer->getSurname()); // use accessor method to get the surname
var_dump($first_customer->getFullname()); // use accessor method to get the fullname
var_dump($first_customer->getEmail()); // use accessor method to get email

$first_customer->setEmail('dhugel@kaloraat.com');
var_dump($first_customer->getEmail()); // use accessor method to get email once set to new one

// try changing from private to public
// protected also does not work
// it works only if you extend - coming later

/**
 * encapsulation - accessors - mutators
 */

/**
 * private visibility is great to maintain internal structure of you classes
 * as a developer, you can change the internal structure without affecting the external code (for example other classes that extends it - coming later) that uses it
 * so how do we read or change these private properties or methods from outside or other classes?
 * we can do so using getters and setters
 * these methods are also known as accessor
 */

// lets make the Customer -> firstname property accessible from init.php - using accessor
// lets also make the Customer -> email property changable from init.php - using mutators
