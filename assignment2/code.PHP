<?php
$login=$_GET["login"];
$password=$_GET["password"];
$str1="Welcome ";
$line1="The entered data was incorrect";
$line2="please try again";
$mark="!";
if($_GET["login"] ||$_GET["password"]){
	if($login=="dganiuly" && $password=="dganiuly"){
		printf("%s %s %s", $str1, $login, $mark);
	}else{
		printf("%s %s %s", $line1, $line2, $mark);
	}
}
?>
