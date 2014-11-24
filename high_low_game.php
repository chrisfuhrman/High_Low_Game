<?php

// High Low Game.  Guess a # between 1 and 100!
do {
	fwrite(STDOUT, 'Guess a # between 1 and 100.'); 
	"\n";
	$users_number = fgets(STDIN);

	if ($users_number < $random_number) {
		echo "HIGHER \n"; 
	}
	elseif ($users_number > $random_number) {
		echo "LOWER \n";
	}
} while ($random_number != $users_number);

echo "You won!";

exit(0);


// High Low Game variation.
$iteration = 0;
$random_number = mt_rand(1, 100);
do {
	if ($iteration == 0) {
		fwrite(STDOUT, "Guess a # between 1 and 100. \n");
	}
	elseif ($iteration != 0) {
		fwrite(STDOUT, "Guess again \n");
	}
	$users_number = fgets(STDIN);

	if ($users_number < $random_number) {
		echo "HIGHER \n"; 
	}
	elseif ($users_number > $random_number) {
		echo "LOWER \n";
	}
	$iteration++;
} while ($random_number != $users_number);

echo "You won!";

exit(0);

