<?php
if (!empty($_FILES['attachment'])) {
	$file = $_FILES['attachment'];

	$srcFileName = $file['name'];
	$newFilePath = __DIR__ . '/uploads/' . $srcFileName;

	$image_info = getimagesize($file['tmp_name']);

	$allowedExtensions = ['jpg', 'png', 'gif'];
	$extension = pathinfo($srcFileName, PATHINFO_EXTENSION);
	if (!in_array($extension, $allowedExtensions)) {
		$error = 'Загрузка файлов с таким расширением запрещена!';
	} elseif ($file['error'] !== UPLOAD_ERR_OK) {
		$error = 'Ошибка при загрузке файла.';
	} elseif (file_exists($newFilePath)) {
		$error = 'Файл с таким именем уже существует';
	} elseif ($_FILES['attachment']['size'] / 1024 / 1024 >= 8 * 1024 * 1024) {
		$error = 'Файл чересчур большой!';
	} elseif ($image_info[0] >= 1280 || $image_info[1] >= 720) {
		$error = 'Картинка имеет чересчур большое разрешение!';
	} elseif (!move_uploaded_file($file['tmp_name'], $newFilePath)) {
		$error = 'Ошибка при загрузке файла';
	} else {
		$result = 'http://myproject.loc/uploads/' . $srcFileName;
	}
}
?>
<html>

<head>
	<title>Загрузка файла</title>
</head>

<body>
	<?php if (!empty($error)): ?>
		<?= $error ?>
	<?php elseif (!empty($result)): ?>
		<?= $result ?>
	<?php endif; ?>
	<br>
	<form action="/files_upload/upload.php" method="post" enctype="multipart/form-data">
		<input type="file" name="attachment">
		<input type="submit">
	</form>
</body>

</html>
