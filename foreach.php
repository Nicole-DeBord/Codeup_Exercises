<?php

// exercise 3.3.2.

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// construct a loop that iterates through each value and outputs its data type

// foreach($things as $dataType) {
// 	if(is_integer($dataType)) { 
// 		echo 'integer' . PHP_EOL;
// 	} 
// 	elseif(is_float($dataType)) {
// 		echo 'float' . PHP_EOL;
// 	} 
// 	elseif(is_bool($dataType)) {
// 		echo 'boolean' . PHP_EOL;
// 	}
// 	elseif(is_array($dataType)) {
// 		echo 'array' . PHP_EOL;
// 	}
// 	elseif(is_null($dataType)) {
// 		echo 'null' . PHP_EOL;
// 	}
// 	elseif(is_string($dataType)) {
// 		echo 'string' . PHP_EOL;
// 	}
// }

// This does the EXACT SAME THING using gettype function, but much less work 

// foreach ($things as $dataType) { 
// 	$value = gettype($dataType);
// 	echo $value . PHP_EOL;
// }

// Hey, look - that can be simplified!: 

// foreach ($things as $dataType) {
// 	echo gettype($dataType) . PHP_EOL;
// }

// construct a loop that iterates through each value and only outputs values
// of scalar type:


// foreach($things as $thing) {
// 	if (is_scalar($thing)) {
// 		echo $thing . PHP_EOL;
// 	}
// }


// Create a loop tht will echoe out every value, including those nested in 
// arrays:


// foreach($things as $thing) {
// 	if (is_array($thing)) {
// 		foreach ($thing as $value) {
// 			echo $value . PHP_EOL;
// 		}
// 	}
// 	else {
// 		echo $thing . PHP_EOL;
// 	}
// }


?>