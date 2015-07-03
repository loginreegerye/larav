<?php

namespace App\Exercise;

class Camera {
	public $mpixels;

	public function __construct($mpx) {
		$this->mpixels = $mpx;
	}
}