<?php

//SOLUTION 2
$dir_name="images/";
if(!is_dir($dir_name)){
  print "there is no such directory<br>";
  mkdir($dir_name);
}else{
  print "directory was found<br>";
}




  $target_dir = "images/";
  $target_file = $target_dir.basename($_FILES["image_to_upload"]["name"]);
  echo "File Path:".$target_file."<br>";
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  echo "File Extension:".$imageFileType."<br>";

  if(isset($_POST["submit"]))
  {
    $check = getimagesize($_FILES["image_to_upload"]["tmp_name"]);
    var_dump($check);
    echo "<br>";



//SOLUTION 3)
    try{
      if($check !== false)
      {
   echo "File is an image - ".$check["mime"].".";
   $uploadOk = 1;
 }
 else
 {
   throw new Exception("File is not an image");
   $uploadOk = 0;
 }
}catch (Exception $e){
   echo "Exception caught" . $e->getMessage();
 }



  }
  echo "<br>";
//SOLUTION 4
try{
  if (file_exists($target_file))
  {
    throw new Exception("Sorry, file already exists");
    print '<br>';
    $uploadOk = 0;
  }

  if ($_FILES["image_to_upload"]["size"] > 500000){
    throw new Exception("Sorry, your file is too large");
    print '<br>';
    $uploadOk = 0;
  }if
  (  $imageFileType != "jpg"  &&  $imageFileType != "png"  &&
    $imageFileType != "jpeg" && $imageFileType != "gif"){
    throw new Exception("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
    print '<br>';
    $uploadOk = 0;
  }
 }catch (Exception $e){
    print "Exception caught".$e->getMessage();
    print '<br>';
}finally{
   if ($uploadOk == 0){
     echo "Sorry, your file was not uploaded.<br>";
   }else{
     if (move_uploaded_file($_FILES["image_to_upload"]["tmp_name"], $target_file)){
       echo "The file ". basename( $_FILES["image_to_upload"]["name"]). " has been uploaded.";
       print '<br>';
     }else{
       echo "Sorry, there was an error uploading your file.<br>";
       print '<br>';
     }
 }
}
?>
