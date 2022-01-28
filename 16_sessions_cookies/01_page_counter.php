<?php

session_start();

$_SESSION['page-counter'] = $_SESSION['page-counter'] ?? 0;
$_SESSION['page-counter']++;

if ($_SESSION['page-counter'] === 10) {
  echo 'Thanks for visiting us 10 times';
  session_unset();
  session_destroy();
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>My Awesome page></h1>
</body>
</html>
