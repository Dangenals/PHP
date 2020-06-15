<?php
$a = "";
if(isset($_POST["username"]) && isset($_POST["password"])) {
    if($_POST["username"] == "covid19" && $_POST["password"] == "ketket"){
        print $a = "Welcome to the WebPage!";
    }else {
    print $a = "username or password is incorrect!";
    }
}
?>
<form name="input" action="" method="post">
  <h2>Task 1</h2>
    <label for="username">Username:</label><input type="text" value="" id="username" name="username" />
    <label for="password">Password:</label><input type="password" value="" id="password" name="password" />
    <h2 class="error"><?= $a ?></h2>
    <input type="submit" value="Log in" name="submit" />
</form>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="GET">
<input type="text" name="name" placeholder="Name: ">
<input type="text" name="surname" placeholder="Surname: ">
<input type="text" name="username" placeholder="Username: ">
<input type="submit" name="submit" value="Submit">
<?php
$name = isset($_GET["name"]);
$surname = isset($_GET["surname"]);
$username = isset($_GET["username"]);
if(isset($name) && isset($surname) && isset($username)){
  print "Name: ".$name;
  print "Surname: ".$surname;
  print "Username: ".$username;
}
 ?>
</form>
<h2>Task 5</h2>
<?php
$a = " ";
if( isset( $_POST["submit"]) && isset($_POST["year"]))
if ($_POST["year"] >= "1920" && $_POST["year"] <= "2020") {
   $a = "Correct!";
}
else{
   $a = "Incorrect!";
}
?>
<form method="post" name="input" action="">
<label for="name">Name:</label><input type="text" name="name" />
<label for="userName">Username:</label><input type="text" name="userName" />
<label for="email">Email:</label><input type="text" name="email" />
<label for="year">Year of birth:</label><input type="text" name="year" id="year" /  >
<h1 class="error"><?= $a ?></h1>
<input type="submit" name="submit" id = "submit" value="submit">
</form>
