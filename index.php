<?php

require 'vendor/autoload.php';

class User{
	public $username = "Alamin";
	private $d = "Shit";
	public function hello(){
		echo "This is a demo object function";
	}
	public static function hello_static(){
		echo "This is a demo static function";
	}
}

$user = new User();
dump($user);
