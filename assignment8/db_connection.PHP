<?php
//DB CONNECTION PDO
$host = "localhost";
$user = "user";
$pass = "123";
$db="shop";

  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
?>
