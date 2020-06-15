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
  width: 70%;
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
    <p class="slogan">CART WITH VOUCHER</p>
  </header></center>
  <p style="font-size: 20px; padding-left: 20px">If you want to change your tour, <span style="color: green"><a  style="text-decoration: none" href = "">make changes</a></span></p>
  <p style="font-size: 20px; padding-left: 20px">Do not want to take this tour <span style="color: red"><a style="text-decoration: none" href = "deleteTour.PHP">cancel tour</a></span></p>
  <center>
  <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
 <div class="search">
  <div>
    <select class="from" name="from">
      <option name="from">From :</option>
      <option name="from">Nur-Sultan</option>
      <option name="from">Almaty</option>
      <option name="from">Atyrau</option>
      <option name="from">Aktau</option>
      <option name="from">Atyrau</optiion>
      <option name="from">Aktobe</option>
      <option name="from">Karaganda</option>
      <option name="from">Kostanay</option>
      <option name="from">Pavlodar</option>
      <option name="from">Petropavlovsk</option>
      <option name="from">Uralsk</option>
      <option name="from">Ust-Kamenogorsk</option>
      <option name="from">Shymkent</option>
  </select>
  </div>
  <div>
    <select class="form" name="to">
      <option name="to">To :</option>
      <option name="to">Moscow, RU</option>
      <option name="to">St.Petersburg, RU</option>
      <option name="to">New York, USA</option>
      <option name="to">Los Angeles, USA</option>
      <option name="to">Chicago, USA</option>
      <option name="to">Tashkent, UZB</option>
      <option name="to">Beijing, CHI</option>
      <option name="to">Altaliya, TUR</option>
      <option name="to">Istambul, TUR</option>
      <option name="to">Dubai, UAE</option>
      <option name="to">Abu Dhabi, UAE</option>
      <option name="to">Bangkok, THI</option>
      <option name="to">Kuala Lumpur, MAL</option>
      <option name="to">Canberra, AUS</option>
      <option name="to">Berlin, GER</option>
      <option name="to">Paris, FRA</option>
      <option name="to">Baku, AZJ</option>
      <option name="to">Minsk, BRU</option>
      <option name="to">Brussels, BEL</option>
      <option name="to">Ottawa, CAN</option>
      <option name="to">Zagreb, CRO</option>
      <option name="to">Cairo, EGY</option>
      <option name="to">Tbilisi, JJA</option>
      <option name="to">Budapest, HUN</option>
      <option name="to">London, UK</option>
      <option name="to">Oslo, NOR</option>
      <option name="to">Warsaw, POL</option>
      <option name="to">Madrid, SPN</option>
    </select>
  </div>
  <div class="date">
    <input type="date" type="date" value="<?php echo date('l jS \of F Y h:i:s A') ?>" name="date">
  </div>
  <div>
      <select class="form" name="days">
        <option name="days">Days:</option>
        <option name="days">7</option>
        <option name="days">8</option>
        <option name="days">9</option>
        <option name="days">10</option>
        <option name="days">11</option>
        <option name="days">12</option>
        <option name="days">13</option>
        <option name="days">14</option>
      </select>
  </div>
    <div class="radio" name="type">
      <p>Choose type of vocation</p>
      <label><input type="radio" name="type" value="Rural">Rural</label><br>
      <label><input type="radio" name="type" value="Urban">Urban</label><br>
      <label><input type="radio" name="type" value="Hiking">Hiking</label><br>
      <label><input type="radio" name="type" value="Beach">Beach</label><br>
      <label><input type="radio" name="type" value="Historical">Historical</label><br>
      <label><input type="radio" name="type" value="Romantic">Romantic</label><br>
      <label><input type="radio" name="type" value="Adventure">Adventure</label><br>
    </div>
    <div class="checkbox" id="checkbox2" name="area">
      <p>Choose vocation area</p>
      <label><input type="checkbox" name="area" value="North America">North America</label><br>
      <label><input type="checkbox" name="area" value="South America">South America</label><br>
      <label><input type="checkbox" name="area" value="East Europe">East Europe</label><br>
      <label><input type="checkbox" name="area" value="West Europe">West Europe</label><br>
      <label><input type="checkbox" name="area" value="North Africa">North Africa</label><br>
      <label><input type="checkbox" name="area" value="South Africa">South Africa</label><br>
      <label><input type="checkbox" name="area" value="North Eurasia">North Eurasia</label><br>
      <label><input type="checkbox" name="area" value="Central Asia">Central Asia</label><br>
      <label><input type="checkbox" name="area" value="Eastern Asia">Eastern Asia</label><br>
    </div>
     <div class="checkbox" id="checkbox2" name="number">
      <p>Number of people</p>
      <label><input type="checkbox" name="number" value="1">1</label><br>
      <label><input type="checkbox" name="number" value="2">2</label><br>
      <label><input type="checkbox" name="number" value="3">3</label><br>
      <label><input type="checkbox" name="number" value="5">4</label><br>
      <label><input type="checkbox" name="number" value="5">5</label><br>
    </div>
    <div class="last">
    <textarea name="wishes" placeholder="Your special wishes for vacation"></textarea>
    <br><br>
    <input type="submit" class="btn" value="Submit" name="submit">
    <input type="reset" class="btn" value="Reset" name="reset">
    </div>
  </div>
</form>

  <footer style="background-color: darkblue; color: white;">
  <h1><p style="padding: 50px;">The world is a book and those who do not travel read only one page</p></h1>
</footer>
</body>
</html>
<?php
$host = "localhost";
$user = "user_db";
$password = "123";
$db = "travel_db";
$conn = new mysqli($host, $user, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM `order` ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table><tr><th>ORDER ID</th><th>FROM:</th><th>TO:</th><th>DATES OF TOUR</th>
    <th>NUMBER OF DAYS</th><th>TYPE OF HOLIDAY</th><th>AREA OF TOUR</th>
    <th>NUMBER OF PEOPLE</th><th>SPECIAL COMMENTS</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["from"]."</td>
        <td>".$row["to"]."</td><td>".$row["date"]."</td><td>".$row["days"]."
        </td><td>".$row["type"]."</td><td>".$row["area"]."</td>
        <td>".$row["number"]."</td><td>".$row["wishes"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
