<?php

//SESSION FOR ADMIN'S AUTHORIZATION
//PDO IS USED
session_start();
require_once 'db_connection.php';
if(isset($_POST['submit'])){
    $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
    $password = !empty($_POST['password']) ? trim($_POST['password']) : null;
    $sql = "SELECT * FROM administrator WHERE email = :email AND password = :password";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $password);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if($user){
       $_SESSION['email'] = $user['email'];
       $_SESSION['password'] = $user['password'];
       $_SESSION['submit'] = time()+3600;
       header('Location: admin.PHP');
       exit();
       //--SET COOKIE THAT WORKS 1 HOUR
        setcookie('user', $user['email'], time()+3600, "/");
        header('Location: admin.PHP');
        }else{
          print "Error!";
        }
    }
?>
