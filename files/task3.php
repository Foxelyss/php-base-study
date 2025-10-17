<?php
$numbers = explode(' ', trim(fgets(STDIN)));

foreach ($numbers as $a) {

	foreach ($numbers as $b) {
		if ($a == $b) {
			continue;
		}
		echo $a . ' ' . $b . PHP_EOL;
	}
}
