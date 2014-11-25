<?php

// exercise 3.3.4., part 1

// create a for loop that shows all even numbers between 1 and 100 using continue

for($n = 1; $n <= 100; $n++) {
	echo $n . PHP_EOL;
	if ($n % 2 != 0) {
		continue;
	}
	echo "^ that is an even number" . PHP_EOL;	
} 


?>