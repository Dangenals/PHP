<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
    //--JQUERY
    //--SHOW , HIDE
      $(document).ready(function()
      {
        var readerView = true;
        $("#add").click(function()
        {
          if(readerView == false)
          {
            $('#container').toggle('medium', function() {
            $('#container').hide();
            readerView = true;
             });
          }
          else
          {
            $('#container').toggle('medium', function() {
            $('#container').show();
            readerView = false;
            });
          }
        });
      });
    </script>
    <title>
      Assignment 8
    </title>
    <style media="screen">
    *{
      font-family: arial;
      padding: 0;
      margin: 0;
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
      padding: 30px;
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
    <div style="padding: 30px;">
      <div class="alert alert-info" >
      <strong>Info!</strong> In oder to add a new product.
      </div>
      <button id="add" name="add" type="button" class="btn btn-success">Add a new product</button>
    </div>
    <div class="container" id="container">
      <form action="upload.PHP" method="post" enctype="multipart/form-data">

        <!-- UPLOADING A PICTURE //-->
      <input type="file" name="images[]" id="images[]" value="Choose image"><br>
      <input type="text" name="name" id="name" placeholder="product name"><br>
      <textarea name="description" rows="5" cols="29" id="description" placeholder="description"></textarea><br>
      <input type="text" name="price" id="price" placeholder="price"><br>
      <input type="text" name="color" id="color" placeholder="color"><br>
      <input class="btn btn-success" type="submit" name="submit" id="submit" value="submit">
      </form>
      </div>
      <div class="full">
      <?php

      //DB CONNECTION IN PDO
        require_once 'db_connection.PHP';
        include 'upload.PHP';

        //SEE ALL IMAGES
        $name = !empty($_POST['name']) ? trim($_POST['name']) : null;
        $sql = "SELECT * FROM `product`";
        $stmt  = $conn->prepare($sql);
        $stmt ->bindValue(':name', $name);
        $stmt ->execute();
        $rows = $stmt ->fetchAll(PDO::FETCH_ASSOC);
        foreach($rows as $row){
           echo '<div class="block">';
           echo "<div class=\"photo\"><img src='".$row['image_address']."' ></div>";
           echo "<div class=\"text\"><table class=\"table-hover\">
           <tr>
           <td id=\"part1\">ID: </td><td id=\"part2\">".$row['id']."</td>
           </tr>
           <tr>
           <td id=\"part1\">Name: </td><td id=\"part2\">".$row['name']."</td>
           </tr>
           <tr>
           <td id=\"part1\">Description: </td><td id=\"part2\">".$row['description']."</td>
           </tr>
           <tr>
           <td id=\"part1\">Price: </td><td id=\"part2\">".$row['price']."$ </td>
           </tr>
           <tr>
           <td id=\"part1\">Color: </td><td id=\"part2\">".$row['color']."</td>
           </tr>
           </table>
           </div>";
           echo '</div>';
        }
       ?>
     </div>
  </body>
</html>
