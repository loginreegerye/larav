<?php

namespace App\Exercise;

class Processor {
	public $vendor;
	public $cores;

	public function __construct($v, $c) {
		$this->vendor = $v;
		$this->cores = $c;
	}
}