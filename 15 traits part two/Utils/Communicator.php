<?php

// add namesapce
namespace Bookstore\Utils;

trait Communicator {
	// lets say this trait also has sign method
	public function sign() {
		echo 'Signing the contract - IN COMMUNICATOR';
	}

	// go back to Manager class and use it too
}