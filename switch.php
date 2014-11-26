<?php

// exercise 3.3.5., part 2

 // Set the default timezone
 date_default_timezone_set('America/Chicago');

 // // Get Day of Week as number
 // 1 (for Monday) through 7 (for Sunday)
 $dayOfWeek = date('N');

 // switch($dayOfWeek) {
 //     case 1:
 //     	echo 'Monday';
 //        break;
 //     case 2:
 //     	echo 'Tuesday';
 //     	break;
 //     case 3: 
 //     	echo 'Wednesday - food trucks are here!';
 //     	break;
 //     case 4:
 //     	echo 'Thursday';
 //     	break;
 //     case 5:
 //     	echo 'Friday';
 //     	break;
 //     case 6:
 //     	echo 'Saturday';
 //     	break;
 //     case 7:
 //     	echo 'Sunday';
 //     	break;
 // }



// test and verify the results before creating a matching if block


if ($dayOfWeek == 1) {
	echo 'Monday';
} 
elseif ($dayOfWeek == 2) {
	echo 'Tuesday';
} 
elseif ($dayOfWeek == 3) {
	echo 'Wednesday - FOOD TRUCK JOY';
}
elseif ($dayOfWeek == 4) {
	echo 'Thursday';
}
elseif ($dayOfWeek == 5) {
	echo 'Friday';
}
elseif ($dayOfWeek == 6) {
	echo 'Saturday';
}
elseif ($dayOfWeek == 7) {
	echo 'Sunday';
}
?>