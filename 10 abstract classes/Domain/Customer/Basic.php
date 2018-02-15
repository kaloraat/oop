<?php

namespace Bookstore\Domain\Customer;

use Bookstore\Domain\Customer;

class Basic extends Customer {
	// we already have all the properties and methods available in here
	// the ones that are defined in the Customer and Person

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
}