<?php
$host = "localhost";
$user = "user_db";
$password = "123";
$db = "travel_db";

$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE `order` SET days='($_GET[\'days\'])' WHERE id='46'";
if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
$conn->close();
?>
