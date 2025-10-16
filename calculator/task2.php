<?php
$line = explode(' ', trim(fgets(STDIN)));

$zeros_count = 0;

$count = count($line);

for ($x = 0; $x < $count; $x++) {
	if ($line[$x] == 0) {
		unset($line[$x]);
		$zeros_count++;
	}
}

for ($x = 0; $x < $zeros_count; $x++) {
	$line[] = 0;
}

foreach ($line as $i) {
	echo $i . ' ';
}
