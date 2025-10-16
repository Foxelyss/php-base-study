<?php
$line = explode(' ', trim(fgets(STDIN)));
$values_chart = array_count_values($line);

$max_count = $values_chart[$line[0]];
$value = $line[0];

foreach ($values_chart as $i => $x) {
	if ($x > $max_count) {
		$value = $i;
		$max_count = $x;
	}
}

echo $value;
