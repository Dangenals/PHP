<?php
require_once 'db_connection.PHP';

if(isset($_POST['submit'])){
  $status=1;
  $name = !empty($_POST['name']) ? trim($_POST['name']) : null;
  $surname = !empty($_POST['surname']) ? trim($_POST['surname']) : null;
  $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
  $phone_number = !empty($_POST['phone_number']) ? trim($_POST['phone_number']) : null;
  $company_name = !empty($_POST['company_name']) ? trim($_POST['company_name']) : null;
  $project_idea = !empty($_POST['project_idea']) ? trim($_POST['project_idea']) : null;
  $business_plan = !empty($_POST['business_plan']) ? trim($_POST['business_plan']) : null;
  $images = count($_FILES['images']['name']);


  //-- PDO INSERT
    //-- PDO INSERT IMAGE IN BLOB
  $sql = "INSERT INTO form (image,name,surname,email,phone_number,company_name,project_idea,business_plan)
   VALUES(?,?,?,?,?,?,?,?)";
  $stmt= $conn->prepare($sql);
  $stmt->bindValue(':name', $name);
  $stmt->bindValue(':surname', $surname);
  $stmt->bindValue(':email', $email);
  $stmt->bindValue(':phone_number', $phone_number);
  $stmt->bindValue(':company_name', $company_name);
  $stmt->bindValue(':project_idea', $project_idea);
  $stmt->bindValue(':business_plan', $business_plan);
  for($i=0;$i<$images;$i++){
    $images = $_FILES['images']['name'][$i];
    $format = pathinfo($images, strtolower(PATHINFO_EXTENSION));
    $valid_formats = array("gif","png","jpeg","jpg");

      //--TRY--
      $status=1;
      //TRY
      try{
        if(in_array($format, $valid_formats)){
	  $stmt->execute(array("$images","$name","$surname","$email","$phone_number",
    "$company_name","$project_idea","$business_plan"));
       }else{
         $status=0;
         //TROW EXCEPTION
         throw new NewException("The format of image is not valid");
      print '<br>';
      if ($_FILES["images"]["size"] > 500000){
        $status=0;
      throw new NewException("Sorry, your file is too large");
     }
    }
    if($name = empty($_POST['name']) ||
      $surname = empty($_POST['surname'])||
      $email = empty($_POST['email'])||
      $phone_number = empty($_POST['phone_number'])||
      $company_name = empty($_POST['company_name'])||
      $project_idea = empty($_POST['project_idea'])||
      $business_plan = empty($_POST['business_plan'])){
        $status=0;
        //TROW EXCEPTION
      throw new NewException("Please, fill all the gaps");
      }

      //--CATCH
  }catch (NewException $e){
    echo $e->getMessage();
    //--FINALLY
  }finally{
    if ($status == 0){
     echo "<br>Sorry, try again<br>";
  }else{
    echo "Your answers were submited!";

    //--EXIT
    exit();
  }
  }
}
}

//--Extend Exception CLASS
class NewException extends Exception{
public $name;
public $surname;
public $email;
public $phone_number;

public function set_name($name){
  $this->name=$name;
}

public function get_name(){
  return $this->name;
}

    function __consutruct($phone_number){
      if(is_numeric($phone_number)){
        $this->phone_number=$phone_number;
      }else{
        throw new Exception("Phone number must be numeric");
      }
    }
    }
    function myException($e){
      echo $e->getMessage();
    }
    //SET EXCEPTION HANDLER
    set_exception_handler('myException');

        $exception1 = new NewException("vbsdvbds");

?>
