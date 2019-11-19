<?php
// pemanggilan menggunakan file : magic method
// spl_autoload_register


function autoloadFoo($class){
	$file = "Controller/{$class}.php";
	if(is_readable($file)){
		require $file;
	}
}
function autoloadBar($class){
	$file = "Model/{$class}.php";
	if(is_readable($file)){
		require $file;
	}
}

spl_autoload_register("autoloadFoo");
spl_autoload_register("autoloadBar");

$bar = new Bar();
$bar->anotherFunction();

$foo = new Foo();
$foo->someFunction();

/*
dengan ini sebenarnya sudah cukup untuk menjawab permasalahan, 
akan tetapi cara ini semakin tidak terstandarisasi untuk cara pemanggilannya.

dengan ini munculnya : PSR-4
*/