<?php

// exercise 3.5.1., parts 1 - 3 (I know, I'm inconsistent)

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b . PHP_EOL;
	} else {
		echo "ERROR: You entered '{$a}' and '{$b}'. Both arguments must be numeric values." . PHP_EOL;
	}
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a - $b . PHP_EOL;
    } else {
    	echo "ERROR: You entered '{$a}' and '{$b}'. Both arguments must be numeric values." . PHP_EOL;
    }
}

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
	    echo $a * $b . PHP_EOL;
	} else {
		echo "ERROR: You entered '{$a}' and '{$b}'. Both arguments must be numeric values." . PHP_EOL;
	}
}

function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		if ($b == 0) {
			echo "ERROR: You entered '{$a}' and '{$b}'. Zero is not a valid divisor." . PHP_EOL;
		} else {
	    	echo $a / $b . PHP_EOL;
	    }
	} else {
		echo "ERROR: You entered '{$a}' and '{$b}'. Both arguments must be numeric values." . PHP_EOL;
	}
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		if ($b == 0) {
			echo "ERROR: You entered '{$a}' and '{$b}'. Zero is not a valid divisor." . PHP_EOL;
		} else {
			echo $a % $b . PHP_EOL;
		}	
	} else {
		echo "ERROR: You entered '{$a}' and '{$b}'. Both arguments must be numeric values." . PHP_EOL;
	}
 }

$num1 = 20;
$num2 = 0;

add($num1, $num2);
subtract($num1, $num2);
multiply($num1, $num2);
divide($num1, $num2);
modulus($num1, $num2);

?>