<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Assigment 7</title>
    <script
      src="https://code.jquery.com/jquery-3.5.1.js"
      integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
      crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<style media="screen">
*{
  padding: 10px;
  margin: 0px;
}

a{
text-decoration: none;
color: white;
}

a:hover{
  text-decoration: none;
  color: white
}

table{
  background: #E5E8E8 ;
  border-radius: 10px;
}
.jumbotron{
  padding: 50px;
  color: black;
  display: flex;
  width: 75%;
  justify-content: space-around;
}

</style>
<script>
  $(document).ready(function(){
    var count=0;
    $('#tariffs').click(function(){
      count = count + 1;
      $("#data").load("admin-tariffs.PHP" {

      });
    })
  })
</script>
  </head>
  <body>
    <?php
    //--CLASS--
    //--DB CONNECTION--
    class ConnectDB{
      //--PRIVATE
      private $host;
      private $user;
      private $pass;
      private $db;

      //--PROTECTED
      //--METHOD(FUNCTION)
      protected function connection(){
        $this->host = "localhost";
        $this->user = "user";
        $this->pass = "123";
        $this->db = "company";

        $conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
        return $conn;
      }
    }

    //--INHERITANCE
    class Output extends ConnectDB{

      //--METHOD(FUNCTION)
      //--SELECT--
      public function services(){
        $sql = "SELECT * FROM `services`";
        $conn = new mysqli("localhost", "user", "123", "company");
        $res= $conn->query($sql);
          if ($res->num_rows > 0) {
            echo '<table class="table table-hover">
            <tr>
            <th>Service id</th>
            <th>Service name</th>
            <th>Service price</th>
            </tr>';
            while($row = $res->fetch_assoc()) {
          echo "<tr>
          <td>".$row["service_id"]."</td>
          <td>".$row["service_name"]."</td>
          <td>".$row["service_price"]."</td>
          </tr>";
        }
        echo "</table>";
        } else {
        echo "0 results";
        }
        $conn->close();
      }
    }

    $output = new Output();
    $output->services();

    //--INHERITANCE--
    //--FINAL CLASS--
    final class Administrator extends Output{
      //--PRIVATE
    private $clients;
    private $tariffs;
    private $services;


   //--METHOD OVERRIDING
   public function clients(){
     $sql = "SELECT * FROM `client`";
     $conn = new mysqli("localhost", "user", "123", "company");
     $res= $conn->query($sql);
       if ($res->num_rows > 0) {
         echo '<table class="table table-hover">
         <tr>
         <th>User id</th>
         <th>First name</th>
         <th>Last name</th>
         <th>Email</th>
         <th>Phone number</th>
         <th>Balace</th>
         </tr>';
         while($row = $res->fetch_assoc()) {
       echo "<tr>
       <td>".$row["user_id"]."</td>
       <td>".$row["first_name"]."</td>
       <td>".$row["last_name"]."</td>
       <td>".$row["email"]."</td>
       <td>".$row["phone_number"]."</td>
       <td>".$row["balance"]."</td></tr>";
     }
    echo "</table>";
     } else {
    echo "0 results";
    }
    $conn->close();
   }


    //--PUBLIC
    //--SETTERS AND GETTERS
    public function set_clients($clients){
      $this->clients=$clients;
    }

    public function get_clients(){
      return $this->clients;
    }
    //--SETTERS AND GETTERS
    public function set_tariffs($tariffs){
      $this->tariffs=$tariffs;
    }

    public function get_tarriffs(){
      return $this->tariffs;
    }
    //--SETTERS AND GETTERS
    public function set_services($services){
      $this->services=$services;
    }

    public function get_services(){
      return $this->services;
    }
}


//--OBJECT
$admin = new Administrator();
$admin->set_clients("John Adams");
$admin->set_tariffs("Comfort S");
$admin->set_services("Internet package");
//--OBJECT CALLS OVERRIDEN METHOD
$admin->clients();

//--ABSTRACT
abstract class User extends Output{
//--PUBLIC
public $tariffs;
public $services;
public $tariff_transactions;
public $service_transactions;

//--CONSTRUCT
public function __construct($tariffs,$services,$tariff_transactions,$service_transactions){
  $this->tariffs=$tariffs;
  $this->services=$services;
  $this->tariff_transactions=$tariff_transactions;
  $this->service_transactions=$service_transactions;
}
//--SETTERS AND GETTERS
public function set_tariffs($tariffs){
  $this->tariffs=$tariffs;
}

public function get_tariffs(){
  return $this->tariffs;
}

//--SETTERS AND GETTERS
public function set_services($services){
  $this->services=$services;
}

public function get_services(){
  return $this->services;
}
//--SETTERS AND GETTERS
public function set_tariff_transactions($tariff_transactions){
  $this->tariff_transactions=$tariff_transactions;
}

public function get_tariff_transactions(){
  return $this->traiff_transactions;
}
//--SETTERS AND GETTERS
public function set_service_transactions($service_transactions){
  $this->service_transactions=$service_transactions;
}

public function get_service_transactions(){
  return $this->service_transactions;
}

}



//--DB CONNECTION
require_once 'db_connection.PHP';
     ?>
<?php

//--DB TO JSON
$connect=mysqli_connect("localhost","user","123","company");
$result = mysqli_query($connect,"SELECT * FROM `client`");
$json_array = array();
while($row=mysqli_fetch_assoc($result)){
   $json_array[] = $row;
}

//--ENCODING FROM JSON AND PRINTING IN PHP
print json_encode($json_array);
 ?>

  </body>
</html>
