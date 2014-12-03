<?php

// Exercise 3.6.4. - Explode and Implode Functions

// Part 2: 

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(', ', $physicistsString);

function humanizedList($array) {
		$lastPhysicist = array_pop($array);
		$famousFakePhysicists = implode(', ', $array);
		return $famousFakePhysicists = "$famousFakePhysicists and $lastPhysicist";
	}

humanizedList($physicistsArray);

echo "Some of the most famous fictional theoretical physicists are " . humanizedList($physicistsArray) . PHP_EOL;

?>