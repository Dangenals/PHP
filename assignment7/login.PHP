    <?php
    //LOGIN FORM
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $connect=mysqli_connect("localhost","user","123","company");
    $email=mysqli_real_escape_string($connect,$email);
    $pass=mysqli_real_escape_string($connect,$pass);
    $result = mysqli_query($connect,"SELECT * FROM `client`
      WHERE email='$email' and password='$pass'")
      or die(mysql_error());
      $row=mysqli_fetch_array($result);
      if($row['email'] == $email && $row['password'] == $pass){
        require 'view.PHP';
      }else{
        echo "Email or password is wrong, try again please!";
      }
?>
