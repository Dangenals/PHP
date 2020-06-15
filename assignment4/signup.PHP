<?php
$name = filter_var($_POST['name']);
$surname = filter_var($_POST['surname']);
$login = filter_var($_POST['login']);
$password = filter_var($_POST['password']);
$phone = filter_var($_POST['phone']);

//$password = md5($password."strline123");
$mysql = new mysqli('localhost','user_db','123','travel_db');
$mysql->query("INSERT INTO `register` (`name`, `surname`, `login`, `password`, `phone`)
VALUES('$name', '$surname', '$login', '$password', '$phone')");

$mysql->close();

header('Location: profile.PHP');
 ?>
