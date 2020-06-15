<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<meta charset="UTF-8">
	<title>AMAZON TRAVEL HOME PAGE</title>
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
  color: blue;
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

.item img{
  width: 100%;
}
@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

ul li{
list-style: none;
}

.container{
  display: flex;
  flex-direction: column;
  width: 80%;
  font-size: 18px;
  justify-content: space-between;
}

.block{
  display: flex;
  width: 100%;
}

.photo{
  width: 50%;
}

.photo img{
  width: 100%;
  padding: 20px;
}

.text{
  padding: 20px;
  width: 50%;
}


  </style>
</head>
<body>
	<nav class="menu-area">
		<ul>
      <li id="li1"><a title="amazon" href="#"></a></li>
			<li><a title="amazon travel"href="#"><img id="img1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Amazon_logo.svg/1200px-Amazon_logo.svg.png"></i></a></li>
			<li><a title="home"href="index.PHP">HOME</a></li>
			<li><a title="hot tours" href="hot tours.PHP">HOT TOURS</a></li>
			<li><a title="tickets" href="tickets.PHP">TICKETS</a></li>
			<li><a title="log in" href="log in.PHP">LOG IN<img src="https://justice.org.au/wp-content/uploads/2017/08/avatar-icon.png"></a></li>
		</ul>
	</nav>
<div class="container">
  <div class="block">
    <div class="photo"><img  src="https://i.pinimg.com/originals/86/ff/b8/86ffb87572d657f335cd7cd828c70de3.jpg"></div>
    <div class="text"><h1>Our features: </h1>
          <?php


      //PHP CODE
      $text = array(' own receiving and sending offices', ' progressive and convenient online booking system' ,
        'individual approach to each application' , 'work only with trusted and reliable partners',
        'wide selection of tours and destinations', 'extensive experience and high professionalism of employees',
        'prompt solution of any questions, 24/7 support');
      $temp=1;

      while($temp<count($text)){
          print $temp.' '.$text[$temp].'<br>';
          $temp++;

      }

      ?></div>
  </div>
    <div class="block">
      <div class="photo"><img src="https://mosafir.ma/wp-content/uploads/2017/02/24-5.jpg"></div>
    <div class="text">
    <h1>Why Amazon Travel?</h1>
    <p>
    Travel Agency Amazon-leader of the tourism business in Kazakhstan. We have been in the tourist market for more than 12 years . At the moment, we have 10 offices in 5 cities of Kazakhstan. Every day we develop and strive for new heights, keeping our old customers and deserve the love of new ones! To date, we have sent more than 90 thousand tourists on a bright holiday, and this number is growing every day!
  </p>
</div>
</div>
<div class="block">
  <div class="photo"><img src="https://i.pinimg.com/originals/4c/4b/40/4c4b401e538f739fd3d54498de45708d.jpg"></div>
  <div class="text"><h1>Today our company is</h1>
  <ul>
    <li>millions of loyal customers</li>
    <li>more than 30 partner offices around the world</li>
    <li>more than 2000 employees</li>
    <li>more than 1200 qualified guides</li>
    <li>more than 30 destinations and over 10 billion tours</li>
    <li>more than 15,000 travel partners</li>
    <li>best contracts with more than 7,500 hotels worldwide</li>
    <li>more than 150 partner airlines</li>
  </ul></div>
</div>
</div>
<footer style="background-color: darkblue; color: white;">
  <h1><p style="padding: 50px;">The world is a book and those who do not travel read only one page</p></h1>
</footer>
</body>
</html>
