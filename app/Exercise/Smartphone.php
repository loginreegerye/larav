<?php

namespace App\Exercise;

class Smartphone {
	public $name;
	public $processor;
	public $display;
	public $camera;
	public $battery;

	public function __construct($n, $pr, $dis, $cam, $ba) {
		$this->name = $n;
		$this->processor = $pr;
		$this->display = $dis;
		$this->camera = $cam;
		$this->battery = $ba;
	}
}