<?php
$line = trim(fgets(STDIN));

$array = explode(' ', $line);
$array_1 = $array;

for ($x = 0; $x < count($array); $x++) {
	$multiplication = 1;

	for ($i = 0; $i < count($array); $i++) {
		if ($x == $i) {
			continue;
		}
		$multiplication *= $array_1[$i];
	}

	$array[$x] = (int)$multiplication;
}

foreach ($array as $num) {
	echo $num . ' ';
}
