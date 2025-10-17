<?php
$nums = explode(' ', trim(fgets(STDIN)));
$count = (int)trim(fgets(STDIN));

function find(array $array, int $count): array
{
	if ($count === 1) {
		return $array;
	}

	$low_combinations = find($array, $count - 1);

	$current_combinations = [];
	foreach ($array as $item) {
		foreach ($low_combinations as $low_combination) {
			$current_combinations[] = trim($item . ' ' . $low_combination);
		}
	}
	return $current_combinations;
}

foreach (find($nums, $count) as $combination) {
	echo $combination . PHP_EOL;
}
