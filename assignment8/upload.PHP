<?php
//DB CONNECTION IN PRO
require_once 'db_connection.PHP';
require_once 'admin.PHP';
//UPLOADING IMAGES AND NEW PRODUCTS
if(isset($_POST['submit'])){
  $name = !empty($_POST['name']) ? trim($_POST['name']) : null;
  $description = !empty($_POST['description']) ? trim($_POST['description']) : null;
  $price = !empty($_POST['price']) ? trim($_POST['price']) : null;
  $color = !empty($_POST['color']) ? trim($_POST['color']) : null;
  $images = count($_FILES['images']['name']);
  $sql = "INSERT INTO product (name, description, price, color, image_address) VALUES(?,?,?,?,?)";
  $stmt= $conn->prepare($sql);
  $stmt->bindValue(':name', $name);
  $stmt->bindValue(':description', $description);
  $stmt->bindValue(':price', $price);
  $stmt->bindValue(':color', $color);
  for($i=0;$i<$images;$i++){
    $image = $_FILES['images']['name'][$i];
    $image_address = 'images/'.$image;
    $format = pathinfo(strtolower($image_address), strtolower(PATHINFO_EXTENSION));
    $valid_formats = array("gif","png","jpeg","jpg");
    if(in_array($format, $valid_formats)){
       if(move_uploaded_file($_FILES['images']['tmp_name'][$i],$image_address)){
	  $stmt->execute(array("$name", "$description", "$price", "$color", "$image_address"));
       }
    }
  }
}
 ?>
