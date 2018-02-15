<?php

namespace Bookstore\Domain\Customer;

use Bookstore\Domain\Customer;
use Bookstore\Domain\Person;

class Premium extends Person implements Customer {

	// lets add few more
	public function getMonthlyFee() {
		return 10.0;
	}

	public function getAmountToBorrow() {
		return 10;
	}

	public function getType() {
		return 'Premium';
	}

	// adding thse methods because Customer implemented Payer interface
	public function pay(float $amount) {
		return "Paying $amount";
	}

	public function isExtentOfTaxes() {
		return 'Dont worry about paying tax!';
	}
}

// head over to init.php and do some testing