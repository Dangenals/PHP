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
  background-color:   #00235f;
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

.wrapper {
  max-width: 700px;
  margin: 50px auto;
  background: lightgrey;
  box-sizing: border-box;
  padding: 40px;
  box-shadow: 0 0 5px rgba(0,0,0,0.5);
}

h1 {
  text-align: center;
  text-transform: uppercase;
  color:  #00235f;
  margin-bottom: 50px;
  font-size: 35px;
}

.form {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-bottom: 50px;
}

.form-title {
  font-size: 25px;
  margin-bottom: 20px;
  color:  #00235f;
  text-align: center;
}

.input-form {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  width: 100%;
  margin-bottom: 20px;
  align-items:center;
}

.inner-msg {
  width: 100%;
  margin-bottom: 20px;
}

.input > input {
  font-size: 15px;
  border: 0;
  width: 250px;
  padding: 10px 20px;
  outline: none;
  margin: 20px;
}

.msg > textarea {
  font-size: 17px;
  width: 100%;
  border: 0;
  padding: 12px 20px;
  outline: none;
  height: 90px;
}

.buttons {
  display: flex;
  flex-wrap: wrap;
  flex-direction: row;
}

.btn {
  margin: 20px;
  border: 2px solid #fff;
  padding: 10px 20px;
  color: darkblue;
  font-size: 20px;
  cursor: pointer;
}

.btn:hover{
  background: darkblue;
  color: white;
}

label{
  margin-left: 20px;
  font-size: 18px;
  color:  #00235f;
}

.radio{
  padding: 20px;
  display: flex;
  color: white
  font-size: 18px;
}

.radio p{
  margin-left: 20px;
}

.phone input{
  width: 100%;
  height: 30px;
  font-size: 15px;
}

.acc p{
  color:  #00235f;
}

span{
  margin-left: 20px;
  color: green;
}

  </style>
</head>
<body>
  <nav class="menu-area">
    <ul>
      <li id="li1"><a title="amazon" href="#"></a></li>
      <li><a title="amazon travel"href="#"><img id="img1" src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a9/Amazon_logo.svg/1200px-Amazon_logo.svg.png"></i></a></li>
      <li><a title="home" href="index.PHP">HOME</a></li>
      <li><a title="about us"href="about us.PHP">ABOUT US</a></li>
      <li><a title="hot tours" href="hot tours.PHP">HOT TOURS</a></li>
      <li><a title="tickets" href="tickets.PHP">TICKETS</a></li>
    </ul>
  </nav>
<div class="wrapper">
<form action="signup2.PHP" method="GET">
  <h1>Registration</h1>
  <div class="form">
    <div class="form-title">
      Please, enter your data here:
    </div>
    <div class="input-form">
      <div class="input">
        <input type="text" placeholder="Name">
      </div>
      <div class="input">
        <input type="text" placeholder="Surname">
      </div>
      <div class="input">
        <input type="text" placeholder="Login">
      </div>
      <div class="buttons">
          <input type="submit" class="btn" value="Login">
          <input type="reset" class="btn" value="Reset">
      </div>
    </div>
</form>
</div>
</div>
<footer style="background-color: white; color: darkblue;">
  <h1><p style="padding: 50px;">The world is a book and those who do not travel read only one page</p></h1>
</footer>
</body>
</html>
