<?php
//CONNECTING TO DB
$host = "localhost";
$user = "user1";
$password = "123";
$db = "rank";
$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) { die($conn->connect_error);
}
?>
