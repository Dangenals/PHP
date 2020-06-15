<?php
session_start();
$host = 'localhost';
$user = 'user_db';
$password = '123';
$db = 'travel_db';
$con = mysqli_connect($host, $user, $password, $db);
if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
if ( !isset($_POST['login'], $_POST['password']) ) {
	exit('Please fill both the username and password fields!');
}
if ($stmt = $con->prepare('SELECT id, password FROM register WHERE login = ?')) {
	$stmt->bind_param('s', $_POST['login']);
	$stmt->execute();
	$stmt->store_result();
  if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
 if ($_POST['password'] === $password) {
		session_regenerate_id();
		$_SESSION['login'] = TRUE;
		$_SESSION['login'] = $_POST['login'];
		echo 'Welcome ' . $_SESSION['login'] . '!';
		header('Location: profile.PHP');
	} else {
		echo 'Incorrect password!';
	}
} else {
	echo 'Incorrect username!';
}
	$stmt->close();
}
?>
