<?php

namespace Raynstudios\Testpack;

class HelloWorldService{
	protected $_times = 0;
	public $message = "Hello, %d time<br>";

	public function sayHello() {
		echo sprintf($this->message, $this->_times);
		$this->_times++;
	}
}