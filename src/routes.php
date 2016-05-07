<?php

Route::get('testpack/lolinstance', function() {
	$lol = app()->make('Raynstudios\Testpack\Lol', array('neerja'));
	$lol->dump();
});

Route::get('testpack/hello', function() {
	$app = app();
	$app['hello']->sayHello();
	$app['hello']->sayHello();
	$app['helloSingleton']->sayHello();
	$app['helloSingleton']->sayHello();
});