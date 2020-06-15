<?php
$host = "localhost";
$user = "user";
$pass = "123";
$db = "company";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die($conn->connect_error);
}
 ?>
