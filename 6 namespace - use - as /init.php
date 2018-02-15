<?php

// 'use' keyword to load files based on namespace
// - FOR TESTING - namespace Bookstore\Domain\BBB;
use Bookstore\Domain\Book;
use Bookstore\Domain\Customer as Me; // you can use 'as' keyword - see bottom - do it at the end

//- FOR TESTING - namespace Bookstore\Domain\BBB;
// use Bookstore\Domain\Book;
// use Bookstore\Domain\Customer;

// lets require classes - UPDATE THE DIR WITH '/DOMAIN'
// then try removing namespace to see the difference
require_once __DIR__ . '/Domain/Book.php';
require_once __DIR__ . '/Domain/Customer.php';

// using the constructor
$harry_potter = new Book('jhdskjhsd', "Harry potter and the magicians", "Jack ross");

// isntantiate customer
$first_customer = new Me(null, "Ryan", "Dhungel", "ryan@kaloraat.com");

var_dump($first_customer);
/**
 * namespaces / use
 */

// if you have two classes with the same name, php would not know which one is being refered
// to solve this issue, php allows us to use namespace 'keyword'

// namespace acts as paths in a filesystem
// each section of the namespace is seperated by \

/**
 * before we use namespace one thing to note is that
 * even though namespaces and the file path will usually be the same
 * this is not necessary, as a developer you can enforce the namespace
 */

// for example - lets begin by moving Customer and Book classes inside Domain folder

// in Customer.php add the namespace and same with Book.php

// namespace Bookstore\Domain;

// now you can refer to Book class by using namespace Bookstore\Domain\Book;

// WHAT IF YOU HAVE TWO BOOK CLASS?
// YOU CAN USE 'as' keyword

// use Bookstore\Domain\Book;
// use Library\Domain\Book as LibraryBook;
