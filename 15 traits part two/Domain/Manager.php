<?php

namespace Bookstore\Domain;
// use trait
use Bookstore\Utils\Communicator;
// add another trait - added later
use Bookstore\Utils\Contract;

class Manager {
	// use Contract;
	// use Contract, Communicator; // added later - CHECK THE OUTPUT - COMMENT OUT THE sign() BELOW FIRST

	// you will see the error
	// Trait method sign has not been applied, because there are collisions with other trait methods

	// this is how you can fix

	use Contract, Communicator {
		Contract::sign insteadof Communicator; // accessing the method of trait using ::
		Communicator::sign as makeSign; // try changing in init.php -> sign to -> makeSign
	}

	// try using it in init.php
	// once tried go ahead

	// this below sign() will take precedence over the one from trait
	// public function sign() {
	// 	echo 'Signing this million dollar contract';
	// }

	// lets create another trait Communicator - inside Utils
}