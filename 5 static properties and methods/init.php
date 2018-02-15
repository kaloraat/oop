<?php

// lets require classes
require_once __DIR__ . '/Book.php';
require_once __DIR__ . '/Customer.php';

// using the constructor
$harry_potter = new Book('jhdskjhsd', "Harry potter and the magicians", "Jack ross");
// var_dump($harry_potter->title);
// if ($harry_potter->getCopy()) {
// 	echo 'Here is your copy of ' . $harry_potter->title . '<br>';
// } else {
// 	echo 'Sorry its gone!';
// }

// var_dump($harry_potter);

// isntantiate customer
$first_customer = new Customer(null, "Ryan", "Dhungel", "ryan@kaloraat.com");

// try creating few more customers with null id and with id and see the getLastId

/**
 * you can access the static method using ::
 * you can reference it either using the class name directly without any instance
 * or an existing instance
 */

var_dump(Customer::getLastId()); // 5 - using the class name directly
var_dump($first_customer::getLastId()); // 5 - using the instance

// var_dump($first_customer->getFirstname()); // use accessor method to get the firstname
// var_dump($first_customer->getFullname()); // use accessor method to get the fullname

/**
 * static properties and methods
 */

// so far all the properties and methods were linked to a specific instance
// GIVE an example by creating few more customers using constructor
// two different instances could have two different values for the same property -> as shown in example ^^

// what if you want a certain property or method to be static.
// what if you want them to be linked to the class itself, not the object that is created on each instance

// thats possible. you to have multiple properties and methods linked to the class itself rather than to the object

// lets add a new property to the class Customer - $lastId
