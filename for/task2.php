<?php
$line = trim(fgets(STDIN));

$array = array_reverse(explode(' ', $line));

foreach ($array as $str) {
	echo "$str ";
}
