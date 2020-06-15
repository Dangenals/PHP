<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      *{
        font-family: arial;
      }
      table, tr, td, th{
        padding: 5px;
        border: 1px solid black;
        border-collapse: collapse;
      }
      .results{
        padding: 100px;
      }
    </style>
  </head>
  <body>
    <div class="results">
      <h1>Results: </h1>
    <?php
    require_once 'db_connection.PHP';
    //SEE ALL THE FILLED FORMS WITH RESULTS
    $sql = "SELECT * FROM `form`";
    $stmt  = $conn->prepare($sql);
    $stmt ->execute();
    //--PDO SELECT
    //--SELECT IMAGE WITH BLOB
    $rows = $stmt ->fetchAll(PDO::FETCH_ASSOC);
    echo "<table><tr><th>ID</th><th>Company logo</th><th>Name</th><th>Surname</th><th>Email</th><th>Phone number</th><th>Company name</th><th>Project idea</th><th>Business plan</th></tr>";
    foreach($rows as $row){
        echo "<tr>
        <td>".$row["id"]."</td>
        <td><img style=\"width:100px\"src='".$row['image']."' ></td>
        <td>".$row["name"]."</td>
        <td>".$row["surname"]."</td>
        <td>".$row["email"]."</td>
        <td>".$row["phone_number"]."</td>
        <td>".$row["company_name"]."</td>
        <td>".$row["project_idea"]."</td>
        <td>".$row["business_plan"]."</td>
        </tr>";
     }
     ?>
   </div>
  </body>
</html>
