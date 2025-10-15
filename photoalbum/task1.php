<?php

$line = str_split(str_replace(' ', '', trim(fgets(STDIN))));

arsort($line);

foreach ($line as $elem) {
	echo $elem;
}
