<?php

$array = [1, 3, 2];

sort($array);

echo implode(':', $array) . '<br>';

$array = [1, 2, 3, 4, 5];


echo implode(' ', array_slice($array, 1, 3));
