<?php
$line = trim(fgets(STDIN));

$numbers = explode(' ', $line);

$numbers_without_repeats =  [];

foreach ($numbers as $num) {
	if (!in_array($num, $numbers_without_repeats)) {
		$numbers_without_repeats[] = $num;
	}
}

foreach ($numbers_without_repeats as $num) {
	echo $num . ' ';
}
