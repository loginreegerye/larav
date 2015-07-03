<?php

namespace App\Exercise;

class Battery {
	public $capacity;

	public function __construct($cap) {
		$this->capacity = $cap;
	}
}