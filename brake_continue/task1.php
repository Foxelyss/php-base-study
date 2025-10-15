<?php


function is_in(array $array, $element): bool
{

	foreach ($array as $el) {
		if ($el === $element) {
			return true;
		}
	}

	return false;
}

function in_bound_count(array $array, $element): int
{
	$count = 0;
	foreach ($array as $el) {
		if ($el === $element) {
			$count++;
		}
	}

	return $count;
}

$array = [1, 2, 1, 3];

echo is_in($array, 1) . ' ' . is_in($array, 5) . '<br>';
echo in_bound_count($array, 1) . ' ' . in_bound_count($array, 5);
