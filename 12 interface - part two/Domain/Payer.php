<?php

namespace Bookstore\Domain;

interface Payer {
	public function pay(float $amount);
	public function isExtentOfTaxes();
}

/**
 * now our Basic and Premium classes can implement both the interfaces.
 * It is already implementing Customer class which is an interface.
 *
 * but now instead of implmenting Customer, it can 'extends' to Person class directly
 * while still maintaining 'implement' Customer ...
 *
 * DO SO:
 *
 * class Basic extends Person implements Customer { ... }
 * class Premium extends Person implements Customer { ... }
 *
 * make sure to 'use' to use 'Person' class on top - on both Basic and Premium
 *
 * use Bookstore\Domain\Person;
 *
 * now go to init.php and try getting firstname email etc..
 *
 * the error - to remove error - in Person.php - this is what moved from Customer earlier
 * parent::__construct($firstname, $surname);
 */

/**
 * extendable interface
 */

/**
 * ok its great we have extended to Person
 * implemented Customer interface
 * but how do we use the Payer interface too ...?
 *
 * using extendable interface...
 */

/**
 * Customer.php
 *
 * make the change so that it extends from Payer.php
 *
 * MAKE IT LOOK SO:
 *
 * interface Customer extends Payer {
 *
 * NOW TRY ACCESSING PAYER METHODS IN INIT.PHP AND SEE THE ERROR
 * ITS BECAUSE IT IS NOT IMPLEMENTED IN BASIC OR PREMIU
 * lets implement them in basic and premium
 */
