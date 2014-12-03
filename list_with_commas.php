<?php

// Exercise 3.6.4. - Explode and Implode Functions

// Part 1, plus var_dump to see what's going on:

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(', ', $physicistsString);

var_dump($physicistsArray);

$lastPhysicist = array_pop($physicistsArray);

$famousFakePhysicists = implode(', ', $physicistsArray);

echo "Some of the most famous fictitious theoreticl physicists are {$famousFakePhysicists}, and {$lastPhysicist}" . PHP_EOL;

?>



