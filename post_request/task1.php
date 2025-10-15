<?php
$line = explode(' ', trim(fgets(STDIN)));

foreach (array_count_values($line) as $x => $val) {
	if ($val >= 2) {
		echo $x . ' ';
	}
}
