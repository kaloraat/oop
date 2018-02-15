<?php

namespace Bookstore\Domain;
// use trait
use Bookstore\Utils\Communicator;
// add another trait - added later
use Bookstore\Utils\Contract;

class Manager {

	use Contract, Communicator {
		Contract::sign insteadof Communicator; // accessing the method of trait using ::
		Communicator::sign as makeSign; // try changing in init.php -> sign to -> makeSign
	}
}