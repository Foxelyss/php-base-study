<?php
$line = trim(fgets(STDIN));

$numbers = explode(' ', $line);

foreach ($numbers as $num) {
	if ($num % 2 == 0) {
		echo $num . ' ';
	}
}
