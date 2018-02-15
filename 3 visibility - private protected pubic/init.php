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
var_dump($first_customer->firstname); // can not access private property

// try changing from private to public
// protected also does not work
// it works only if you extend - coming later