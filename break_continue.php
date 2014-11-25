<?php

// exercise 3.3.4., part 1

// create a for loop that shows all even numbers between 1 and 100 using continue

// for($n = 1; $n <= 100; $n++) {
// 	echo $n . PHP_EOL;
// 	if ($n % 2 != 0) {
// 		continue;
// 	}
// 	echo "^ that is an even number" . PHP_EOL;	
// } 

// Create another for loop that counts from 1 to 100, but stops after 10 using break

for($n = 1; $n <= 100; $n++) {
	if ($n == 10) {
		break;
	}
	echo $n . PHP_EOL;
}

echo "You reached 10!" . PHP_EOL;


?>