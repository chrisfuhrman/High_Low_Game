<?php

$random_question_array = ['Guess again', 'Try again', 'Enter # here', 'Guess a #'];
$comment_array = ['Are you even trying?', 'Are you kidding me?', 'You are so wrong!'];


// High Low Game variation where the user can input the high and low variable.

$low = min ($argv);
$high = max ($argv[1], $argv[2]);


if (!is_numeric($low)) {
	$low = 1;
}
if (!is_numeric($high)) {
	$high = 100;
}
if ($argc != 3) {
$low = 1;
$high = 100;
}

$random_number = mt_rand($low, $high);

// $iteration for computers question.
$iteration = 0;

do {

do {
	$iArray = mt_rand(0, 3);
	$i_comment_array = mt_rand(0, 2);

	if ($iteration == 0) {
		fwrite(STDOUT, "\nGuess a # between $low and $high. \n");
	}
	elseif ($iteration != 0) {
		fwrite(STDOUT, " {$random_question_array[$iArray]}\n");
	}
	$users_number = fgets(STDIN);

	if ($users_number < $random_number) {
		echo "HIGHER \n {$comment_array[$i_comment_array]}";
	}
	elseif ($users_number > $random_number) {
		echo "LOWER \n {$comment_array[$i_comment_array]}";
	}
	$iteration++;
} while ($random_number != $users_number);
echo "You won!" . PHP_EOL;
$iteration = 0;
fwrite(STDOUT, "Play again? \n");
$playAgain = fgets(STDIN);


// Have user enter new # parameters:
fwrite(STDOUT, "Enter new parameters \n");
$low = min ($argv);
$high = max ($argv[1], $argv[2]);
$random_number = mt_rand($low, $high);

}
while ($playAgain == ('Yes' || 'Y'));

exit(0);

