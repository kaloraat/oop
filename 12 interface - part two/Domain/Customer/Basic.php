<?php

namespace Bookstore\Domain\Customer;

use Bookstore\Domain\Customer;
use Bookstore\Domain\Person;

// changed from extends to implements - because Customer class is interface now
class Basic extends Person implements Customer {

	// lets add few more
	public function getMonthlyFee() {
		return 5.0;
	}

	public function getAmountToBorrow() {
		return 3;
	}

	public function getType() {
		return 'Basic';
	}

	// adding thse methods because Customer implemented Payer interface
	public function pay(float $amount) {
		return "Paying $amount";
	}

	public function isExtentOfTaxes() {
		return 'You gotta pay tax mate!';
	}
	// do the same with Premium - isExtentOfTaxes - set to 'Dont worry about paying tax!'
	// now go to init.php and paly with it
}