<?php
if (empty($_GET)) {
	return 'Ничего не передано!';
}

if (empty($_GET['operation'])) {
	return 'Не передана операция';
}

if (!isset($_GET['x1'], $_GET['x2'])) {
	return 'Не переданы аргументы';
}

if (!is_numeric($x1) || !is_numeric($x2)) {
	return 'Введите число';
}

$x1 = (float)$_GET['x1'];
$x2 = (float)$_GET['x2'];

$expression = $x1 . ' ' . $_GET['operation'] . ' ' . $x2 . ' = ';

switch ($_GET['operation']) {
	case '+':
		$result = $x1 + $x2;
		break;
	case '-':
		$result = $x1 - $x2;
		break;
	case '*':
		$result = $x1 * $x2;
		break;
	case '/':
		if ($x2 == 0) {
			return 'На нуль делить нельзя!';
		}

		$result = $x1 - $x2;
		break;
	default:
		return 'Операция не поддерживается';
}

return $expression . $result;
