<?php
// use autoload composer : top-level
namespace AppLoader\Math;

class Calc
{
	public function add($a,$b){
		$result = $a + $b;
		echo "Sum of {$a} and {$b} is {$result}<br>";
	}

	public function substract($a,$b){
		$result = $a - $b;
		echo "Substract {$a} and {$b} is {$result}<br>";
	}
}
