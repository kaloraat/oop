<?php

namespace Bookstore\Domain;

interface Payer {
	public function pay(float $amount);
	public function isExtentOfTaxes();
}
