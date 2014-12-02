<?php

// Exercise 3.6.2. - this is a nice, clean way to do this
// per instructor demonstration

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

function comparedArrays($arrayOne, $arrayTwo) {
	$count = 0;
	foreach ($arrayOne as $name) {
		if (array_search($name, $arrayTwo) !== false) {
		$count++;
		} 
	}
	return $count;	
}

$needle = 'Tina';

findName($needle, $names);

comparedArrays($names, $compare);

echo "'{$needle}' was found in both arrays " . comparedArrays($names, $compare) . " times." . PHP_EOL;




?>