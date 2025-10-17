<?php

setcookie('login', '', 1, '/');
setcookie('password', '', 1, '/');

header('Location: /auth/index.php');
