<!DOCTYPE html>
<html>
<head>
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

.container{
  width: 70%;
  display: grid;
  grid-template-columns:repeat(3, 1fr);
  grid-template-rows: repeat(3, 1fr);
  grid-gap: 35px;
}

.block{
  display: grid;
  grid-template-columns: auto;
  background-color: lightgrey;
}
.block img{
   width: 100%;
}

.block p{
  padding: 5px;
}

.block button{
  width: 150px;
  height: 40px;
  font-size: 20px;
  font-weight: bold;
  background-color: #5ADB00;
  border: 0px;
}

button:hover{
  background-color: green;
}

.block h2{
  padding: 5px;
  color: red;
}

.txt{
  font-weight: bold;
  font-size: 20px;
  padding: 5px;
	</style>
</head>
<body>
	<nav class="menu-area">
		<ul>
      <li id="li1"><a title="amazon" href="#"></a></li>
			<li><a title="amazon travel"href="#"><img id="img1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Amazon_logo.svg/1200px-Amazon_logo.svg.png"></i></a></li>
			<li><a title="home" href="index.PHP">HOME</a></li>
			<li><a title="about us"href="about us.PHP">ABOUT US</a></li>
			<li><a title="tickets" href="tickets.PHP">TICKETS</a></li>
			<li><a title="log in" href="log in.PHP">LOG IN<img src="https://justice.org.au/wp-content/uploads/2017/08/avatar-icon.png"></a></li>
		</ul>
	</nav>
<center><h1>Types of holidays:</h1>
<br>
<?php
$text = array('Beach holidays', ' Mauntain camps',
	' Bust tours', 'City tours', 'Hotel packages',
	'Safari tours', 'Walking tours', 'Sightseeing tours');
for($i=1;$i<count($text);$i++){
	print $i." ".$text[$i]."<br>";
}
?>
<br>
</center>
<center><div class="container">
	<div class="block">
		<div>
		<img src="https://i.pinimg.com/originals/6d/77/58/6d7758782b8d063b4ff88e5728409638.jpg">
	    <h2>100$, for a day</h2>
			<h3 style="color: red">		<?php
					function calculate($price, $days){
						return $price*$days.'$ per '.$days.' days';
					}
					echo calculate(100, 10);
					?>
					</h3>
			</div>
		<div><p class="txt">BUS TOUR</p>
		 <p>You will see the most beautiful parts of Big Apple including places such as: Statue of Liberty,
	     Empire State Building, Chrysler Building, Times Square, Lincoln Center and Central Park<br><br>
	     You must visit this city and take this chance as now the price is the best!</p>
	     <button>ORDER TOUR</button></div>
	</div>
	<div class="block">
		<div>
		<img src="https://www.deluxehomes.ae/wp-content/uploads/2017/03/palm-jumeirah.jpg">
	    <h2>50$, 6 hours</h2>
			<h3 style="color: red">		<?php
					echo calculate(50,10);
					?>
					</h3></div>
		<div><p class="txt">PALM OBSERVATION</p>
	    <p>The best observation of the Palm Jumairah in Duabai with photo stops and comfortable car with air condition, will include amazing photos on proffesional camera with opeartors, also includes minal water as it will be very hot <br>
	    Worth to try if you want to get amazing experience and take cool photos</p>
	    <button>ORDER TOUR</button></div>
	</div>
	<div class="block">
		<div><img src="https://media.afar.com/uploads/images/post_images/images/9qTkBPhHr6/original_bb4326876d7a748c34afbe3b8ffcf5da.jpg?1483570187">
		<h2>120$, for a day</h2>
		<h3 style="color: red">		<?php
				echo calculate(120,2);
				?>
				</h3></div>
		<div><p class="txt">ABU DHABI CITY TOUR</p>
			<p>
			    It will be the best Abu Dhabi obsrvation, There will be many stops for photos,
			    the places that you will see: local market of dried fruits, Emirates palace of Shaikh that was built from gold, Yas isaland and Ferrari World with trading center.<br><br>
                Ferrari World tickets are included in the price
			</p>
			<button>ORDER TOUR</button></div>
		</div>
	<div class="block">
		<div><img src="https://centrmira.com/upload/iblock/09d/09d44557a0b5b0a451adc2671182db10.jpg">
		<h2>90$ per night</h2>
		<h3 style="color: red">		<?php
				echo calculate(90,5);
				?>
				</h3></div>
		<div>
			<p class="txt">DELPHIN PLATINUM HOTEL</p>
			<p>On the Mediterranean coast with a private beach, this seafront hotel features a unique architecture and luxurious interiors. The property includes outdoor pools, spa center and a tennis court.<br><br> The chic rooms of Delphin Imperial Lara are decorated in contemporary design.
		</p><button>ORDER TOUR</button></div>
	</div>
	<div class="block">
		<div><img src="https://i0.wp.com/hotway.com.ua/wp-content/uploads/2018/06/Haydarpasha-Palace-Hotel-%D1%84%D0%BE%D1%82%D0%BE-%D0%BE%D1%82%D0%B5%D0%BB%D1%8F.jpg?resize=1920%2C1080">
			<h2>120$ per night</h2>
			<h3 style="color: red">		<?php
					echo calculate(120,10);
					?>
					</h3></div>
		<div><p class="txt">RIXOS PREMIUM, BELEK</p>
		<p>Offering charming views of Mediterranean sea and pistachio tree forest, all rooms of Rixos Premium Belek feature an elegant décor with modern furnishings. Each room is equipped with a flat-screen satellite TV. All rooms at the Rixos Premium Belek have private balconies and some also have a terrace offering pool and nature views.</p>
		<button>ORDER TOUR</button></div>
	</div>
	<div class="block">
		<div><img src="https://www.wenstourism.com/wp-content/uploads/2018/02/burj-al-arab-11111.jpg">
			<h2>700$ per night</h2>
			<h3 style="color: red">		<?php
					echo calculate(700,10);
					?>
					</h3></div>
			<div><p class="txt">BURJ AL ARAB,DUBAI</p>
		    <p>Located on its own island, Burj Al Arab Jumeirah features suites overlooking the sea, 9 signature restaurants and a full-service spa. Guests may arrive at the property by chauffeur-driven fleets of Rolls-Royce's or alternatively by a dedicated helicopter transfer service. The terrace offers two swimming pools, 32 luxury</p>
		    <button>ORDER TOUR</button></div>
	</div>
	<div class="block">
		<div><img src="https://files.tpg.ua/files/hotels/000062853/Royal_Regency_Club_00.jpg">
			<h2>95$ per night</h2>
			<h3 style="color: red">		<?php
					echo calculate(95,5);
					?>
					</h3></div>
		<div><p class="txt">ROYAL MODERNA, EGYPT</p>
		<p>Albatros Resort has an outdoor pool area overlooking the golden beaches of Nabq Bay. It has spacious guest rooms with private, furnished balconies. Free private parking is available.
		Guests at the Royal Albatros Moderna can stay in bright, contemporary rooms decorated with a sitting area and large windows</p>
		   <button>ORDER TOUR</button></div>
	</div>
	<div class="block">
		<div><img src="https://wallpaperaccess.com/full/1136555.jpg">
			<h2>70$, 2 hours</h2>
			<h3 style="color: red">		<?php
					echo calculate(70,10);
					?>
					</h3></div>
		<div><p class="txt">BURJ KHALIFA, DUBAI</p>
		    <p>The Burj Khalifa has not one but two stunning observatories. At The Top is located on the 124th and 125th floors and the premium At The Top Sky is on the 148th level – a staggering 555m above ground. Equally amazing views are available at At.Mosphere, one of the most coveted Burj Khalifa restaurants.</p>
		    <button>ORDER TOUR</button></div>
	</div>
	<div class="block">
		<div><img src="https://s1.1zoom.ru/b5150/718/India_Temples_Fountains_Taj_Mahal_550854_1920x1080.jpg">
			<h2>80$, 4 hours</h2>
			<h3 style="color: red">		<?php
					echo calculate(80,5);
					?>
					</h3></div>
		    <div><p class="txt">TAJ MAHAL</p>
		     <p>An immense mausoleum of white marble, built in Agra between 1631 and 1648 by order of the Mughal emperor Shah Jahan in memory of his favourite wife, the Taj Mahal is the jewel of Muslim art in India and one of the universally admired masterpieces of the world's heritage.</p><br>
		     <button>ORDER TOUR</button></div>
	</div>
	<div class="block">
		<div><img src="https://i.imgur.com/CUVi8fV.jpg">
			<h2>300$ per night</h2>
			<h3 style="color: red">		<?php
					echo calculate(300,7);
					?>
					</h3></div>
		<div><p class="txt">BUNGALOWS, MALDIVES</p>
		<p>Perched over the Indian Ocean, Gili Lankanfushi offers closeness to sun and sea with its luxurious accommodations. Aside from free Wi-Fi, it also has an ocean-view outdoor pool and relaxing spa.
        Located on the private island of Lankanfushi in Male Atoll, Gili Lankanfushi Maldives</p>
        <button>ORDER TOUR</button></div>
	</div>
	<div class="block">
		<div><img src="https://img2.akspic.ru/image/87794-pejzazhi_gor-prirodnyj_zapovednik-gora-velikaya_kitajskaya_stena-nagore-1920x1080.jpg?attachment=1">
			<h2>40$, 3 hours</h2>
			<h3 style="color: red">		<?php
					echo calculate(40,2);
					?>
					</h3></div>
		<div><p class="txt">GREAT CHINESE WALL</p>
		<p>The Great Wall of China is an ancient series of walls and fortifications, totaling more than 13,000 miles in length, located in northern China. Perhaps the most recognizable symbol of China and its long and vivid history, the Great Wall was originally conceived by Emperor Qin Shi Huang in the third century B.C.</p>
		<button>ORDER TOUR</button></a></div>
	</div>
	<div class="block">
		<div><img src="https://cdn.motor1.com/images/mgl/PRV0W/s1/ferrari-world-abu-dhabi-uae.jpg">
			<h2>70$, for a day</h2>
			<h3 style="color: red">		<?php
					echo calculate(70,8);
					?>
					</h3></div>
		<div><p class="txt">FERRARI WORLD, UAE</p>
		<p>Ferrari World Abu Dhabi is a mostly indoors amusement park on Yas Island in Abu Dhabi, United Arab Emirates. It is the first Ferrari-branded theme park and has the record for the largest space frame structure ever built. Formula Rossa, the world's fastest roller coaster, is also located here.</p><br>
		<button>ORDER TOUR</button></div>
	</div>
</div></center>
<footer style="background-color: darkblue; color: white;">
<?php include 'document2.PHP' ?>
</footer>
</body>
</html>
