<?php
//DATABASE CONNECTION WITH PDO
$host = "localhost";
$user= "user";
$pass = "123";
$db="startup_company";

//--TRY
try {
  $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
  //PDO ERROE EXCEPTION
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //--CATCH
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
?>
