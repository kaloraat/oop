<?php

namespace Bookstore\Domain;

class Book {
	public $isbn;
	public $title;
	public $author;
	public $available;

	public function __construct($isbn, string $title, string $author, int $available = 0) {
		// it runs as soon as you instantiate it by php behind the scene
		$this->isbn = $isbn;
		$this->title = $title;
		$this->author = $author;
		$this->available = $available;
	}

	public function getPrintableTitle() {
		$result = $this->title . ' - ' . ' by ' . $this->author;
		if (!$this->available) {
			$result .= 'Not available';
		}
		return $result;
	}

	public function getCopy() {
		if ($this->available < 1) {
			return false;
		} else {
			$this->available--;
			return true;
		}
	}
}
