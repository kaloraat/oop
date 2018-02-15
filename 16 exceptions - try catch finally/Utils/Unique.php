<?php

namespace Bookstore\Utils;
// use Exception
// use Exception;

trait Unique {
	// copied from Person class
	private static $lastId = 0;
	protected $id; // changed from private to protected

	// public function setId($id) {
	// 	// use exception
	// 	if ($id < 0) {
	// 		throw new \Exception('ID should not be negative number'); // OR YOU CAN 'use' on top [use Exception]
	// 	}
	// 	// try it in init.php - passing the negative -1 as user id

	// 	if (empty($id)) {
	// 		$this->id = ++self::$lastId;
	// 	} else {
	// 		$this->id = $id;
	// 		if ($id > self::$lastId) {
	// 			self::$lastId = $id;
	// 		}
	// 	}
	// }

	// NEXT STEP - TRY CATCH

	public function setId($id) {
		try {
			if ($id < 0) {
				throw new \Exception('ID should not be negative number'); // OR YOU CAN 'use' on top [use Exception]
			}
			// try it in init.php - passing the negative -1 as user id

			if (empty($id)) {
				$this->id = ++self::$lastId;
			} else {
				$this->id = $id;
				if ($id > self::$lastId) {
					self::$lastId = $id;
				}
			}
		} catch (\Exception $e) {
			echo $e->getMessage();
			// YOU CAN ADD FINALLY TOO
		} finally {
			echo 'Done with try catch..'; // if id is not -1 in init.php you will see this
		}
	}

	// static function
	public static function getLastId() {
		return self::$lastId;
	}

	public function getId() {
		return $this->id;
	}
}
