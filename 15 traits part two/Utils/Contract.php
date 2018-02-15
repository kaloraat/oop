<?php

// add namesapce
namespace Bookstore\Utils;

trait Contract {
	public function sign() {
		echo 'Signing the contract';
	}
}

// lets use this trait in a class
// create a new class Manager.php inside Domain folder