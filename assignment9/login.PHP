<?php
//SESSION FOR LOGIN
session_start();
//PDO IS USED
require_once 'db_connection.php';
if(isset($_POST['submit'])){
    $login = !empty($_POST['login']) ? trim($_POST['login']) : null;
    $password = !empty($_POST['password']) ? trim($_POST['password']) : null;
    //SELECT PDO
    $sql = "SELECT * FROM user WHERE login = :login AND password = :password";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':login', $login);
    $stmt->bindValue(':password', $password);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if($user){
       $_SESSION['login'] = $user['login'];
       $_SESSION['password'] = $user['password'];
       $_SESSION['submit'] = time()+3600;
       header('Location: user.PHP');
       //--EXIT
       exit();
       //--SET COOKIE THAT WORKS 1 HOUR
        setcookie('user', $user['email'], time()+3600, "/");
        header('Location: client.PHP');
        }else{
          echo "ERROR";
          //DIE
          die();
        }
    }
?>
