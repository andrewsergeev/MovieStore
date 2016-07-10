<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">

    <title>Vertigo</title>
	<link rel="shortcut icon" href="include/image/favicon.png" type="image/png">
    <link rel="stylesheet" href="include/style.css">
</head>
<body>
<div class="h1"><h1>Vertigo Store</h1></div>


<?php

/*
CREATE TABLE `comments` (
  `id` int NOT NULL auto_increment,
  `user_id` char(20) NOT NULL,
  `name_id` char(30) NOT NULL,
  `comment` mediumtext NOT NULL,
  PRIMARY KEY (`id`),
  foreign key (`user_id`)
    references register(username),
  foreign key (`name_id`)
    references item(name)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
*/

$mysqli = new mysqli("localhost", "root", "andre231091S", "magazine", 3306);
if ($mysqli->connect_errno) {
    echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>
<div class="header">
    <div class="link"><a href="index.php">Home</a></div>