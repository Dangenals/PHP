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
  font-family: arial;
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
  width: 250px;
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
  font-family: arial;
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

textarea{
  width: 100%;
  height: 50%;
  border-radius: 7px;
  border: 0;
}
.search{
   text-align: center;
   padding: 20px;
   width: 75%;
   margin: auto;
   display: grid;
   grid-gap: 20px;
   background-color: lightgrey;
   grid-template-columns: repeat(4, 1fr);
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

.checkbox{
padding: 10px;
width: 100%;
}

.checkbox input{
  height: 15px;
  width: 15px;
}

.checkbox label{
  font-size: 16px;
}

#checkbox2{
  margin-top: 10px;
}

#text1{
  font-size: 17px;
  width: 100%;
  height: 50%;
}

.btn{
  margin-left: 15px;
  width: 40%;
  height: 40px;
  cursor: pointer;
  font-size: 19px;
}

.btn:hover{
  background-color: green;
}
.container{
  background-color: white;
}
.row{
  padding: 20px;
}
.row img{
  width: 100%;
}

.row a{
  color: red;
}

  </style>
</head>
<body>
	<nav class="menu-area">
		<ul>
      <li id="li1"><a title="amazon" href="#"></a></li>
			<li><a title="amazon travel"href="#"><img id="img1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Amazon_logo.svg/1200px-Amazon_logo.svg.png"></i></a></li>
			<li><a title="about us"href="about us.PHP">ABOUT US</a></li>
			<li><a title="hot tours" href="hot tours.PHP">HOT TOURS</a></li>
			<li><a title="tickets" href="tickets.PHP">TICKETS</a></li>
      <li><a title="tickets" href="cart.PHP">cart</a></li>
			<li><a title="log in" href="log in.PHP">LOG IN<img src="https://justice.org.au/wp-content/uploads/2017/08/avatar-icon.png"></a></li>
		</ul>
	</nav>
<center>
  <header><p class="slogan">AMAZON TRAVEL</p></header></center>
  <center><?php
//PHP CODE
$date = date("D");
switch($date){
    case "Mon":
        echo '<h1 style="color: red">There are special offers on beach type holidays</h1>';
        break;
    case "Tue":
        echo '<h1 style="color: red">There are special offers on hiking type holidays</h1>';
        break;
    case "Wed":
        print '<h1 style="color: red">All airway tickets are under special offers</h1>';
        break;
    case "Thu":
        print '<h1 style="color: red">There are special offers on camping tours</h1>';
        break;
    case "Fri":
        print '<h1 style="color: red">All the hiking tours are under special offer</h1>';
        break;
    case "Sat":
        print '<h1 style="color: red">All airway tickets are under special offers</h1>';
        break;
    case "Sun":
        print '<h1 style="color: red">There are special offers on beach type holidays</h1>';
        break;
    default:
        echo '<h1 style="color: red">Plese leave a request and we will contact you</h1>';
        break;
}
?></center>
  <center><div id="f1"><h1>Please enter the data</h1></div></center>
  <form action="code2.PHP" method="POST">
 <div class="search">
  <div>
    <select class="from">
      <option>From :</option>
      <option>Nur-Sultan</option>
      <option>Almaty</option>
      <option>Atyrau</option>
      <option>Aktau</option>
      <optiion>Atyrau</optiion>
      <option>Aktobe</option>
      <option>Karaganda</option>
      <option>Kostanay</option>
      <option>Pavlodar</option>
      <option>Petropavlovsk</option>
      <option>Uralsk</option>
      <option>Ust-Kamenogorsk</option>
      <option>Shymkent</option>
  </select>
  </div>
  <div>
    <select class="form">
      <option>To :</option>
      <option>Moscow, RU</option>
      <option>St.Petersburg, RU</option>
      <option>New York, USA</option>
      <option>Los Angeles, USA</option>
      <option>Chicago, USA</option>
      <option>Tashkent, UZB</option>
      <option>Beijing, CHI</option>
      <option>Altaliya, TUR</option>
      <option>Istambul, TUR</option>
      <option>Dubai, UAE</option>
      <option>Abu Dhabi, UAE</option>
      <option>Bangkok, THI</option>
      <option>Kuala Lumpur, MAL</option>
      <option>Canberra, AUS</option>
      <option>Berlin, GER</option>
      <option>Paris, FRA</option>
      <option>Baku, AZJ</option>
      <option>Minsk, BRU</option>
      <option>Brussels, BEL</option>
      <option>Ottawa, CAN</option>
      <option>Zagreb, CRO</option>
      <option>Cairo, EGY</option>
      <option>Tbilisi, JJA</option>
      <option>Budapest, HUN</option>
      <option>London, UK</option>
      <option>Oslo, NOR</option>
      <option>Warsaw, POL</option>
      <option>Madrid, SPN</option>
    </select>
  </div>
  <div class="date">
    <input type="date" type="date" value="2019-03-23">
  </div>
  <div>
      <select class="form">
        <option>Days:</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
      </select>
  </div>
    <div class="checkbox">
      <p>Choose type of vocation</p>
      <label><input type="checkbox">Rural</label><br>
      <label><input type="checkbox">Urban</label><br>
      <label><input type="checkbox">Hiking</label><br>
      <label><input type="checkbox">Beach</label><br>
      <label><input type="checkbox">Historical</label><br>
      <label><input type="checkbox">Romantic</label><br>
      <label><input type="checkbox">Adventure</label><br>
    </div>
    <div class="checkbox" id="checkbox2">
      <p>Choose vocation area</p>
      <label><input type="checkbox">North America</label><br>
      <label><input type="checkbox">South America</label><br>
      <label><input type="checkbox">East Europe</label><br>
      <label><input type="checkbox">West Europe</label><br>
      <label><input type="checkbox">North Africa</label><br>
      <label><input type="checkbox">South Africa</label><br>
      <label><input type="checkbox">North Eurasia</label><br>
      <label><input type="checkbox">Central Asia</label><br>
      <label><input type="checkbox">Eastern Asia</label><br>
    </div>
     <div class="checkbox" id="checkbox2">
      <p>Number of people</p>
      <label><input type="checkbox">1</label><br>
      <label><input type="checkbox">2</label><br>
      <label><input type="checkbox">3</label><br>
      <label><input type="checkbox">4</label><br>
      <label><input type="checkbox">5</label><br>
    </div>
    <div class="last">
    <textarea name="name" placeholder="Your special wishes for vacation"></textarea>
    <br><br>
    <input type="submit" class="btn" value="Submit" name="submit">
    <input type="reset" class="btn" value="Reset" name="reset">
    </div>
  </div>
</form>
<div class="container">
  <div id="Carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#Carousel" data-slide-to="1" class="active"></li>
      <li data-target="#Carousel" data-slide-to="2"></li>
      <li data-target="#Carousel" data-slide-to="3"></li>
      <li data-target="#Carousel" data-slide-to="4"></li>
      <li data-target="#Carousel" data-slide-to="5"></li>
      <li data-target="#Carousel" data-slide-to="6"></li>
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img src="https://images6.alphacoders.com/497/thumb-1920-497480.jpg" >
        <div class="carousel-caption">
          <h3>Burj Khalifa</h3>
          <p>Dubai, UAE</p>
        </div>
      </div>
      <div class="item">
        <img src="https://wallpaperaccess.com/full/465630.jpg" >
        <div class="carousel-caption">
          <h3>Maldive islands</h3>
          <p>Maldives, South Asia</p>
        </div>
      </div>
      <div class="item">
        <img src="https://s1.1zoom.me/b5742/103/Argentina_Parks_Waterfalls_Rivers_Iguazu_national_566094_1920x1080.jpg" >
        <div class="carousel-caption">
          <h3>Iguazu Waterfalls</h3>
          <p>South America</p>
        </div>
      </div>
      <div class="item">
        <img src="https://i.pinimg.com/originals/8c/61/50/8c615012e0311ab1e9811f3e4f3fcc5b.jpg" >
        <div class="carousel-caption">
          <h3>Thailand Islands</h3>
          <p>Thailand, South-Eastern Aisa</p>
        </div>
      </div>
      <div class="item">
        <img src="https://images.wallpaperscraft.ru/image/parizh_franciya_eyfeleva_bashnya_nebo_goluboy_707_1920x1080.jpg" >
        <div class="carousel-caption">
          <h3>Eiffel tower</h3>
          <p>Paris, France</p>
        </div>
      </div>
      <div class="item">
        <img src="https://images8.alphacoders.com/467/thumb-1920-467192.jpg" >
        <div class="carousel-caption">
          <h3>The Great Chinese Wall</h3>
          <p>China, Eastern Asia</p>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#Carousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
    </a>
    <a class="right carousel-control" href="#Carousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
    </a>
  </div>
</div>
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
  <img src="https://look.com.ua/pic/201210/1920x1080/look.com.ua-57289.jpg">
 </div>
 <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
 <h1>UAE, <a title="hot tours" href="hot tours.HTML">from 600$</a></h1>
 <p>The UAE is a desert with blooming gardens, warm waters of the Persian Gulf, luxury hotels and a lot of goods in stores. The United Arab Emirates is an opportunity to plunge into the Eastern exotics , see picturesque landscapes, learn the cultural and national features of an interesting country. In the days of nomadic tribes, the wealth of these places consisted only in Golden Sands and azure waters. With the advent of civilization and technological progress, it turned out that on the ocean floor near the UAE there is "black gold" - oil, which is much more valuable than the Golden dunes.... contribution was the development of trade and navigation. Later on the land of Turkey there were many colonies , and in VIII...</p>
</div>
</div>
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
  <img src="https://s1.1zoom.ru/b3660/360/Istanbul_Turkey_Houses_Rivers_Bridges_Evening_Sky_513499_1920x1080.jpg">
 </div>
 <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
 <h1>Turkey, <a title="hot tours" href="hot tours.HTML">from 500$</a></h1>
 <p>Turkey is a country connecting Europe with the Middle East. Turkey has played a rather difficult role in history. On this land, a large number of wars took place , which was accompanied by a change in the local population. There are more than two thousand ancient settlements on the territory of Turkey. About 10 thousand years ago, the history of the peoples of Turkey began. An important role was played by the Greeks who occupied this land in the XIV-XII centuries BC. their most important contribution was the development of trade and navigation. Later on the land of Turkey there were many colonies , and in VIII...</p>
 </div>
</div>
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
  <img src="https://s1.1zoom.ru/b5050/877/Egypt_Desert_Camels_Cairo_Pyramid_Palms_Sand_534756_1920x1080.jpg">
 </div>
 <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
 <h1>Egypt, <a title="hot tours" href="hot tours.HTML">from 450$</a></h1>
 <p>Egypt is an amazing country, shrouded in the secrets of the ancient world. There is hardly a person who sees the mysterious pyramids or beautiful coral gardens of the red sea, will not be delighted. Going on a trip to Egypt, you will be able to touch with your own hands the thousand-year-old tombs of the pharaohs who ruled Upper and Lower Egypt, visit the Titanic ruins, temples of Kornak and Luxor, as well as buy ancient and unusual things.</p>
 </div>
</div>
<div class="row">
<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
  <img src="https://images.wallpaperscraft.com/image/thailand_tropics_sea_boats_rocks_84829_300x188.jpg">
 </div>
 <div class="col-lg-8 col-md-8 col-sm-6 col-xs-6">
 <h1>Thailand, <a title="hot tours" href="hot tours.HTML">from 800$</a></h1>
 <p>Thailand is a beautiful place with exotic plants and animals! If You have not yet traveled to this country, be sure to pay attention to it. Such wonderful resorts as Pattaya, Phuket, Nang, Kwang and others have been admiring tourists from all over the world for years. Here are the most incendiary hangouts and parties in Asia. People go to Thailand to have fun in modern night clubs, see unusual temples and visit interesting excursions, go shopping, taste original cuisine and learn the culture of the Thai people....</p>
 </div>
</div>
</div>
<footer style="background-color: darkblue; color: white;">
  <?php include 'document.PHP' ?>
</footer>
</body>
</html>
