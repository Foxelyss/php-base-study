<?php
$line = trim(fgets(STDIN));

$array = explode(' ', $line);

$max_minus = $array[0] - $array[1];

for ($x = 0; $x < count($array); $x++) {

	for ($i = $x; $i < count($array); $i++) {
		if ($array[$x] - $array[$i] > $max_minus) {
			$max_minus = $array[$x] - $array[$i];
		}
	}
}

echo $max_minus;
