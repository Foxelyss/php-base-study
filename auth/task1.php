<?php

$line = explode(' ', trim(fgets(STDIN)));

$max_sum = $line[0];

for ($x = 0; $x < count($line); $x++) {
	$sum = (int)$line[$x];
	for ($i = $x + 1; $i < count($line); $i++) {
		if ($sum > $max_sum) {
			$max_sum = $sum;
		}
		$sum += (int)$line[$i];
	}
}

echo $max_sum;
