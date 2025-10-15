<?php
$login = !empty($_GET['login']) ? $_GET['login'] : '';
$password = !empty($_GET['password']) ? $_GET['password'] : '';

$isAuthorized = false;

$status = 'Логин неверный';

if ($login === 'admin') {
	if ($password === 'Pa$$w0rd') {
		$isAuthorized = true;
		$status = 'Логин и пароль верные!';
	} else {
		$status = 'Пароль неверный';
	}
}


?>
<html>

<head>
	<title>Результат авторизации</title>
</head>

<body>
	<p>
		<?= $status ?>
	</p>
</body>

</html>
