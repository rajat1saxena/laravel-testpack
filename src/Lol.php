<?php

namespace Raynstudios\Testpack;

class Lol{
	var $name;

	public function __construct($name='default') {
		$this->name = $name;
	}

	// Dumps name field's value
	public function dump() {
		var_dump($this->name);
	}
}