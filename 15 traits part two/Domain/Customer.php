<?php

namespace Bookstore\Domain;

// abstract class - changed to interface - moved the rest of the code to Person class
interface Customer extends Payer {

	// removed abstract word from previous state where this class was abstract class
	public function getMonthlyFee();
	public function getAmountToBorrow();
	public function getType();
}
