<?php
//SESSION FOR REGISTRATION
//THROUGH PDO
session_start();
require_once 'db_connection.php';
if(isset($_POST['submit'])){
    $name = !empty($_POST['name']) ? trim($_POST['name']) : null;
    $surname = !empty($_POST['surname']) ? trim($_POST['surname']) : null;
    $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
    $pass = !empty($_POST['password']) ? trim($_POST['password']) : null;
    $sql = "INSERT INTO client (name,surname,email,password) VALUES
    (:name, :surname, :email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':email', $email);
    $stmt->bindValue(':password', $pass);
    $stmt->bindValue(':name', $name);
    $stmt->bindValue('surname', $surname);
    $result = $stmt->execute();
    if($result){
        header('Location: index.PHP');
    }else{
        print "Please try again!";
    }
}
?>
