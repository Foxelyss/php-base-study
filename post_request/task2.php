<?php
$line = explode(' ', trim(fgets(STDIN)));

arsort($line);

$x = 0;
$num = 1;

foreach ($line as $i) {
	if ($x >= 2) {
		break;
	}

	$num *= (int)$i;
	$x++;
}

echo $num;
