<?php

namespace Bookstore\Domain\Customer;

use Bookstore\Domain\Customer;

class Premium implements Customer {

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
}

// head over to init.php and do some testing