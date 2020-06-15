<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>
      Assignment 8
    </title>
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
      grid-template-columns: auto auto;
      grid-template-rows: auto auto;
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
      background-color: lightgrey;
      border-radius: 10px;
      font-size: 14px;
    }

    table td{
      text-align: center;
    }

    table tr{
      height: 40px;
    }

    #part1{
      width: 100px;
      font-weight: bold;
    }

    #part2{
      width: 300px;
      padding: 5px;
    }

    </style>
  </head>
  <body>
      <header><center><p>Our stock of mobile phones</p></center></header>
      <a href="cart.PHP"><button style="margin-left: 30px; width: 100px;" type="button" name="button">Cart</button></a>
    <div class="full">
    <?php
    //DB CONNECTION IN PDO
      require_once 'db_connection.PHP';
      //SEE ALL IMAGES TAKEN FROM DB
      $name = !empty($_POST['name']) ? trim($_POST['name']) : null;
      $sql = "SELECT * FROM `product`";
      $stmt = $conn->prepare($sql);
      $stmt ->bindValue(':name', $name);
      $stmt->execute();
      $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
      foreach($rows as $row){
         echo '<div class="block">';
         echo "<div class=\"photo\"><img src='".$row['image_address']."' ></div>";
         echo "<div class=\"text\"><table class=\"table-hover\">
         <tr>
         <td id=\"part1\">Product id: </td><td id=\"part2\">".$row['id']."</td>
         </tr>
         <tr>
         <td id=\"part1\">Name: </td><td id=\"part2\">".$row['name']."</td>
         </tr>
         <tr>
         <td id=\"part1\">Description: </td><td id=\"part2\">".$row['description']."</td>
         </tr>
         <tr>
         <td id=\"part1\">Price: </td><td id=\"part2\">".$row['price']."$  </td>
         </tr>
         <tr>
         <td id=\"part1\">Color: </td><td id=\"part2\">".$row['color']."</td>
         </tr>
         <tr>
         <td></td>
         <td><a href=\"cart.PHP\"><button name=\"submit\" type=\"submit\" id=\"submit\" class=\"btn btn-success\">Add to cart</button></a></td>
         <td></td>
         </tr>
         </table>
         </div>";
         echo '</div>';
      }
      ?>
  </body>
</html>
