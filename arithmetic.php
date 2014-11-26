<?php

// exercise 3.5.1., parts 1 - 4, EVERYTHING DONE

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a + $b . PHP_EOL;
	} else {
		echo notNumeric($a, $b);
	}
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
    	echo $a - $b . PHP_EOL;
    } else {
    	echo notNumeric($a, $b);
    }
}

function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
	    echo $a * $b . PHP_EOL;
	} else {
		echo notNumeric($a, $b);
	}
}

function divide($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		if ($b == 0) {
			echo divideZero($a, $b);
		} else {
	    	echo $a / $b . PHP_EOL;
	    }
	} else {
		echo notNumeric($a, $b);
	}
}

function modulus($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		if ($b == 0) {
			echo divideZero($a, $b);
		} else {
			echo $a % $b . PHP_EOL;
		}	
	} else {
		echo notNumeric($a, $b);
	}
 }

// Create error message functions to use within functions above

 function notNumeric($a, $b) {
 	echo "ERROR: You entered '{$a}' and '{$b}'. Both arguments must be numeric values." . PHP_EOL;
 }

 function divideZero($a, $b) {
 		echo "ERROR: You entered '{$a}' and '{$b}'. Zero is not a valid divisor." . PHP_EOL;
 }

 


$num1 = 20;
$num2 = 0;

add($num1, $num2);
subtract($num1, $num2);
multiply($num1, $num2);
divide($num1, $num2);
modulus($num1, $num2);

?>