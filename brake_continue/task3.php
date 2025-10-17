<?php
$line = trim(fgets(STDIN));

$numbers = (int)$line;

$old = 0;
$previous = 1;
$next = 1;

for ($x = 0; $x < $numbers; $x++) {
	echo $old . ' ';

	$old = $previous;
	$previous = $next;
	$next = $old + $previous;
}
