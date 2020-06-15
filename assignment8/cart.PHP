<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous">
</script>
    <title>Assignment 8</title>
    <style media="screen">
    *{
      font-family: arial;
      padding: 0;
      margin: 0;
    }

    header{
      background: lightgrey;
      padding: 30px;
      font-size: 50px;
      font-weight: bold;
    }


    #container{
      display: none;
      margin-top: 40px;
      padding: 30px;
      width: 30%;
      border-radius: 10px;
      background: lightgrey;
    }

    input{
      width: 225px;
      height: 35px;
      border-radius: 8px;
      border: 0;
      margin-bottom:5px;
    }
    textarea{
      border-radius: 8px;
      border: 0;
    }

    .full{
      display: grid;
      grid-template-columns: auto ;
      grid-template-rows: auto ;
    }

    .block{
      display: flex;
      flex-direction: row;
      padding: 20px;
    }


    .photo{
      width: 40%;
    }

    .photo img{
      width: 100%;
    }

    table{
      border-radius: 10px;
      font-size: 14px;
    }

    table td{
      text-align: center;
      width: 250px;
    }

    table tr{
      height: 20px;
    }

    table tr,td,th{
      border: 1px solid black;
    }



    </style>
  </head>
  <body>
  <center><h1>Cart</h1></center>
  <?php
  //GET DATA IN CART
  require_once 'db_connection.PHP';
  $name = !empty($_POST['name']) ? trim($_POST['name']) : null;
  $description = !empty($_POST['description']) ? trim($_POST['description']) : null;
  $price = !empty($_POST['price']) ? trim($_POST['price']) : null;
  $color = !empty($_POST['color']) ? trim($_POST['color']) : null;
  $sql = 'SELECT * FROM `product` WHERE id=1';
  $stmt = $conn->prepare($sql);
  $stmt->bindValue(':name', $name);
  $stmt->bindValue(':description', $description);
  $stmt->bindValue(':price', $price);
  $stmt->bindValue(':color', $color);
  $stmt->execute();
  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach($rows as $row){
    echo "<table><tr><th>ID</th><th>Image</th><th>Name</th><th>Description</th><th>Price</th><th>Color</th></tr>";
    foreach($rows as $row){
      echo "<tr><td>".$row["id"]."</td><td><img style=\"width:100px;\"src='".$row['image_address']."' ></td><td>".$row["name"]."</td><td> ".$row["description"]."</td><td>".$row["price"]."$ </td><td> ".$row["color"]."</td></tr>";
  }
  echo '</table>';
  }
?>
  </body>
</html>
