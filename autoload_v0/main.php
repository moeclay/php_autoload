<?php
// pemanggilan menggunakan file : include()
include('Foo.php');
include('Bar.php');

$foo = new Foo();
$foo->someFunction();

$bar = new Bar();
$bar->anotherFunction();


/*
kekurangannya :
- ketika ingin menjalankan fitur komplek, misal
memanggil file 10 class
- sangat tidak efisien
*/