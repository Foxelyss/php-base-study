<?php
$line_a = trim(fgets(STDIN));
$line_b = trim(fgets(STDIN));

if (count_chars($line_a, 1) === count_chars($line_b, 1)) {
	echo 'yes';
} else {
	echo 'no';
}
