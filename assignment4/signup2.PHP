<?php

class Registration{
  public $name;
  public $surname;
  public $login;

  function __construct(){
    $this->name = isset($_POST['name']) ? $_POST['name'] : null;
    $this->surname = isset($_POST['surname']) ? $_POST['surname'] : null;
    $this->login = isset($_POST['login']) ? $_POST['surname'] : null;
  }

  function check(){
    if(empty($this->name) || empty($this->surname) || empty($this->login)){
      echo "Please fill all the fields";
    }
    else{
      echo "Succesfully registered!";
    }
  }

  function set_name($name){
    $this->name = $name;
  }

  function get_name(){
    return $this->name;
  }

  function set_surname($surname){
    $this->surname = $surname;
  }

  function get_surname(){
    return $this->surname;
  }

  function set_login($login){
    $this->login = $login;
  }

  function get_login(){
    return $this->login;
  }
}
  $person1 = new Registration();
  $name = isset($_GET['name']);
  $surname =isset($_GET['surname']);
  $login = isset($_GET['login']);
  $person1->set_name($name);
  $person1->set_surname($surname);
  $person1->set_login($login);
  $person1->set_name("Daniyal");
  print "Welcome ".$person1->get_name()." !";
  print $person1->surname;
 ?>
