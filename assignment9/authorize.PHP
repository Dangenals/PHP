<?php

//ADMIN'S AUTHORIZATION
//PDO IS USED
//SESSION
session_start();
require_once 'db_connection.PHP';
if(isset($_POST['submit'])){
    $login = !empty($_POST['login']) ? trim($_POST['login']) : null;
    $password = !empty($_POST['password']) ? trim($_POST['password']) : null;
    //SELECT WITH PDO
    $sql = "SELECT * FROM admin WHERE login = :login AND password = :password";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':login',$login);
    $stmt->bindValue(':password', $password);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if($user){
      //--SESSIONS
       $_SESSION['login'] = $user['login'];
       $_SESSION['password'] = $user['password'];
       $_SESSION['submit'] = time()+3600;
       header('Location: admin.PHP');
       //EXIT
       exit();
       //--SET COOKIE THAT WORKS 1 HOUR
        setcookie('user', $user['email'], time()+3600, "/");
        header('Location: admin.PHP');
        }else{
          echo "ERROR";
          //DIE
          die();
        }
    }
?>
