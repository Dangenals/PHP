<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Assignment 8</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous">
</script>
<script>
//--JQUERY
//--SHOW , HIDE
  $(document).ready(function()
  {
    var readerView = true;
    $("#admin").click(function()
    {
      if(readerView == false)
      {
        $('#container').toggle('slow', function() {
        $('#container').hide();
        readerView = true;
         });
      }
      else
      {
        $('#container').toggle('slow', function() {
        $('#container').show();
        readerView = false;
        });
      }
    });
  });
</script>
<script>
//--JQUERY
//--SHOW , HIDE
$(document).ready(function()
{
  var readerView = true;
  $("#user").click(function()
  {
    if(readerView == false)
    {
      $('#container2').toggle('slow', function() {
      $('#container2').hide();
      readerView = true;
       });
    }
    else
    {
      $('#container2').toggle('slow', function() {
      $('#container2').show();
      readerView = false;
      });
    }
  });
});
</script>
    <style media="screen">
    *{
      font-family: arial;
      padding: 0;
      margin: 0;
    }
      header{
        padding: 60px;
        background-color: darkgreen ;
        color: white;

      }
     p{
        font-weight: bold;
        font-size: 50px;
      }

      ul{
        style: none;
      }

      .left{
        width: 20%;
        float: left;
        background: #36BCF5;
        height: 900px;
      }

      li{
        padding: 10px;
        color: white;
        font-size: 30px;
        font-weight: bold;
      }

      li:hover{
        opacity: .7;
        background: darkblue;
      }

      .main{
        float: left;
        width: 70%;
      }

     .main h1{
       padding: 20px;
     }

     #container{
       display: none;
       margin-top: 40px;
       padding: 30px;
       width: 30%;
       background: lightgrey;
     }

     #container2{
       display: none;
       margin-top: 40px;
       padding: 30px;
       width: 30%;
       background: lightgrey;
     }

     #container3{
       display: none;
       margin-top: 40px;
       padding: 30px;
       width: 30%;
       background: lightgrey;
     }

     #container4{
       display: none;
       margin-top: 40px;
       padding: 30px;
       width: 30%;
       background: lightgrey;
     }

     #create{
       padding: 40px;
       font-size: 20px;
     }
    input{
    margin-top: 10px;
    width: 250px;
    height: 30px;
}

     button{
       width: 150px;
       height: 30px;
       margin-left: 5px;
       border-radius: 10px;
       background: green ;
       color: white;
       border: 0;
       font-size: 17px;
     }

     button:hover{
       background: darkgreen;
     }

     img{
       padding: 30px;
       width: 80%;
     }
    </style>
  </head>
  <body>
    <div class="container">
      <header>
        <p>500 Startups</p>
      </header>
      <div class="left">
        <ul>
          <li id="admin">Administrator</li>
          <li id="user">User</li>
        </ul>
      </div>
      <div class="main">
          <center>
<div class="container" id="container">

  <?php //--LOGIN FORM FOR ADMINISTRATOR ?>
  <form id="form1" action="authorize.PHP" method="post">
    <h1>Administrator's login form</h1>
    <input type="text" id="login" name="login" placeholder="Enter login"><br>
    <input type="password" id="password" name="password" placeholder="Enter password"><br>
    <input type="submit" id="submit" name="submit" value="login">
  </form>
</div>
<div class="container2" id="container2">
  <form id="form1" action="login.PHP" method="post">
      <?php   //--LOGIN FORM FOR USER ?>
    <h1>User's login form</h1>
    <input type="text" id="login" name="login" placeholder="Enter login"><br>
    <input type="password" id="password" name="password" placeholder="Enter password"><br>
    <input type="submit" id="submit" name="submit" value="login">
  </form>
</div>
</center>
    </div>
  </body>
</html>
