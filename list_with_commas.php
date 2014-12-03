<?php

// Exercise 3.6.4. - Explode and Implode Functions

// Part 3 - added a sort option  

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(', ', $physicistsString);

function humanizedList($array, $sort) {
		if($sort) {
			asort($array);
			$lastPhysicist = array_pop($array);
			$famousFakePhysicists = implode(', ', $array);
		}
		return $famousFakePhysicists . ', and ' . $lastPhysicist;
	}

$famousFakePhysicists = humanizedList($physicistsArray, true);

echo "Some of the most famous fictional theoretical physicists are $famousFakePhysicists" . PHP_EOL;

?>