<?php
// pemanggilan menggunakan file : magic method
// __autoload() 
function __autoload($class){
	$file = $class.".php";
	if(is_readable($file)){
		// panggil file
		require $file;
	}
}

$foo = new Foo();
$foo->someFunction();

$bar = new Bar();
$bar->anotherFunction();


/*
kekurangannya :
- hanya ada 1 autoload yg bisa dipakai
- ini akan menjadi masalah ketika kita memiliki class2 yg berbeda directory dan semua ingin di auto load
*/