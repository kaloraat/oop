<?php

namespace Bookstore\Utils;

trait Unique {
	// copied from Person class
	private static $lastId = 0;
	protected $id; // changed from private to protected

	public function setId($id) {
		if (empty($id)) {
			$this->id = ++self::$lastId;
		} else {
			$this->id = $id;
			if ($id > self::$lastId) {
				self::$lastId = $id;
			}
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
