<?php

// exercise 3.3.3., part 2

$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

// construct a loop that iterates through each book, then each book's keys 
// and values - your output should contain the book's title, then list the
// key value pairs for the data about each book:

// foreach ($books as $book => $details) {
// 	echo $book . PHP_EOL; 
// 		foreach ($details as $detail => $value) {
// 			echo $detail . ": " . $value . PHP_EOL;
// 		} 
// 	echo "\n";
// } 


// *** Update your loop to only show books that were written after 1950:

foreach ($books as $book => $details) {
	if ($details['published'] > 1950) {
		echo $book . PHP_EOL; 	
			foreach ($details as $detail => $value) {
				echo $detail . ": " . $value . PHP_EOL;
			} 
	}
		echo "\n";
			
} 

?>