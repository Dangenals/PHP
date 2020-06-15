<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<meta charset="UTF-8">
	<title>AMAZON TRAVEL</title>
	<style type="text/css">
   *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
.menu-area{
  top: 0;
  position: sticky;
  z-index: 99999;
}
.menu-area a {
  display: flex;
  align-items: center;
  justify-content: center;
  color: #061250 ;
  background:lightgrey;
  height: 50px;
  font-family: Arial;
  font-size: 15px;
  font-weight: bold;
  text-decoration: none;
  text-transform: uppercase;
}

#img1{
width: 35%;
}

.menu-area a:hover {
  color: darkblue;
}

.menu-area ul {
  list-style: none;
  display: flex;
}

.menu-area li {
  position: relative;
  width: 300px;
  text-align: center;
}
.logo img{
  width: 150px;
}

.menu-area img{
  width: 50px;
}


#li1{
  width: 50px;
}
.life{
  font-size: 60px;
}

#f1{
  width: 75%;
  padding: 5px;
  background-color: lightgrey;
}

header{
  padding:5px;
  background-color: white;
  color:#00235f;
  margin-top: -10px;
}

body{
  margin: 0;
  color:  #00235f ;
  background-color: white;
  padding: 0;
}

.slogan{
  font-size: 70px;
}

.navbar{
  width: 5rem;
  height: 100vh;
  position: fixed;
  background: var(--bg-primary);
  transition: width 200ms ease;
}

.navbar-nav{
  list-style: none;
  display: flex;
  flex-direction: column;
  margin: 0;
  padding: 0;
  align-items:center;
  height: 100%;
}

.nav-link{
  width: 100%;
  align-items: center;
  height: 5rem;
  color: var(--text-primary);
  text-decoration: none;
}

.side-nav{
  font-size:30px;
  cursor:pointer;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: lightgrey;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  font-family: sans-serif;
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 20px;
  display: block;
  color: darkblue;
  transition: 0.3s;
  margin-top: 30px;
  font-weight: bold;
}

.sidenav a:hover {
  color: blue;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.search{
   text-align: center;
   padding: 20px;
   width: 75%;
   margin: auto;
   display: grid;
   grid-gap: 10px;
   background-color: lightgrey;
   grid-template-columns: repeat(5, 1fr);
   grid-template-rows: repeat(1, 1fr);
}

.search select{
  width: 100%;
  height: 30px;
  font-size: 20px;
  color: #00235f;
  background-color:white;
  border-radius: 7px;
  border:1px solid lightgrey;
}

.date input{
  width: 100%;
  height: 30px;
  color: #00235f;
  background-color: white;
  font-size: 19px;
  border-radius: 7px;
  border:1px solid lightgrey;
}

button{
  width: 100%;
  height: 30px;
  color: #00235f;
  background-color: #5ADB00;
  font-size: 19px;
  border-radius: 7px;
  border:1px solid lightgrey;
}

button:hover{
background-color:green;
}

.container{
  display: flex;
  flex-direction: row;
  width: 80%;
  justify-content: space-between;
}

.block{
  margin-left: 20px;
  width: 20%;
  background-color: grey;
  padding: 20px;
}

.container img{
  width: 100%;
}

.item img{
  width: 100%;
  height: 100px;
}

.red{
color: red;
}

table{
  width: 50%;
}

table th,td{
  border: 2px solid black;
}

table td,tr,th{
  padding: 10px;
}
  </style>
</head>
<body>
	<nav class="menu-area">
		<ul>
      <li id="li1"><a href="#"></a></li>
			<li><a title="amazon travel"href="#"><img id="img1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Amazon_logo.svg/1200px-Amazon_logo.svg.png"></i></a></li>
			<li><a title="home" href="index.PHP">HOME</a></li>
			<li><a title="about us"href="about us.PHP">ABOUT US</a></li>
			<li><a title="hot tours" href="hot tours.PHP">HOT TOURS</a></li>
			<li><a title="log in" href="log in.PHP">LOG IN<img src="https://justice.org.au/wp-content/uploads/2017/08/avatar-icon.png"></a></li>
		</ul>
	</nav>
<center>
  <header>
    <p class="slogan">MY PREFERENCES<p>
  </header>
<body>
  <?php
$host = "localhost";
$user = "user_db";
$password = "123";
$db = "travel_db";
$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM order";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["from"]. " " . $row["to"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
<footer style="background-color: darkblue; color: white;">
  <h1><p style="padding: 50px;">The world is a book and those who do not travel read only one page</p></h1>
</footer>
</body>
</html>
