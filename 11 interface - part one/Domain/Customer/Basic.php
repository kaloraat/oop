<?php

namespace Bookstore\Domain\Customer;

use Bookstore\Domain\Customer;

// changed from extends to implements - because Customer class is interface now
class Basic implements Customer {

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