<?php
$from = filter_var($_POST['from']);
$to = filter_var($_POST['to']);
$date = filter_var($_POST['date']);
$days = filter_var($_POST['days']);
$type = filter_var($_POST['type']);
$area = filter_var($_POST['area']);
$number = filter_var($_POST['number']);
$wishes = filter_var($_POST['wishes']);
$login = filter_var($_POST['login']);
//$password = md5($password."strline123");
$mysql = new mysqli('localhost','user_db','123','travel_db');
$mysql->query("INSERT INTO `order` (`from`, `to`, `date`, `days`, `type`, `area`, `number`, `wishes`)
VALUES('$from', '$to', '$date', '$days', '$type', '$area', '$number', '$wishes')");

$mysql->close();

$id = $_POST['id'];
if($id){
  echo $id;
  }else{
  echo 'Could re-fill the form please';
}
header('Location: cart.PHP');
?>
