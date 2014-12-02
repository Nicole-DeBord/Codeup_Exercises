<?php

// My solution to exercise 3.6.2.

$names = ['Tina', 'Bob', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function findName($name, $array) {
	$index = array_search($name, $array);
	if ($index === false) {
		echo 'FALSE' . PHP_EOL;
	} else {
		echo 'TRUE' . PHP_EOL;
	}
}

// Create a function that compares two arrays
// Pass in the value we are searching for ($name), 
// and the arrays we are searching through ($arrayOne/$arrayTwo)
function compareArrays($name, $arrayOne, $arrayTwo) {
	$indexOne = array_search($name, $arrayOne);
	$indexTwo = array_search($name, $arrayTwo);
	// Conditional - if value is found in both arrays...
	if ($arrayOne[$indexOne] == $arrayTwo[$indexTwo]) {
		echo "It's in both arrays!" . PHP_EOL;
	} else {
		echo "It's not in both arrays." . PHP_EOL;
	}

}

// if one thing is true, and another thing is true - think about it!

$needle = 'Bob';

// we have to pass $names as an argument too, because it is not
// defined within our function - scope!

findName($needle, $names);
compareArrays($needle, $names, $compare)

?>