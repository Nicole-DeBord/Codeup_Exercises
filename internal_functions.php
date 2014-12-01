<?php

// exercise 3.5.3.

$nothing = null;
$something = '';
$array = array(1,2,3);

// create a function that checks if a variable is set or empty, and display $variable_name

// unset($something);

function checkSet($variable) {
	if (isset($variable)) {
		echo '$variable is SET' . PHP_EOL;
	} else {
		echo '$variable is EMPTY' . PHP_EOL;
	}
}

// TEST: if var $nothing is set, display '$nothing is SET'

// TEST: if var $nothing is empty, display '$nothing is EMPTY'

// TEST: if var $something is set, display '$something is SET'


checkSet($nothing);
checkSet($something);


// Serialize the array $array, and output the results - fx serialize outputs an array
// as a string


// Unserialize $array, and output the results - fx unserialize outputs a string as an array

$serial = serialize($array);
echo $serial . PHP_EOL;

$unserial = unserialize($serial); 
var_dump($unserial) . PHP_EOL;

