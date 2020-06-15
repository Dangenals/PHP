<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Assignment 7</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous">
</script>
<script>
//--JQUERY
//--SHOW , HIDE
  $(document).ready(function()
  {
    var readerView = true;
    $("#admin, #admin").click(function()
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
  $("#user, #user").click(function()
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
        background-color: #9F36F5 ;
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


    input{
    margin-top: 10px;
    width: 250px;
    height: 30px;
}

     button{
       width: 200px;
       height: 30px;
       margin-left: 30px;
       border-radius: 10px;
       background: #3669F5 ;
       color: white;
       border: 0;
     }

     button:hover{
       background: darkblue;
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
        <p>Activ center</p>
      </header>
      <div class="left">
        <ul>
          <li id="admin">Administrator</li>
          <li id="user">User</li>
        </ul>
      </div>
      <div class="main">
          <h1>Please choose your profile</h1>
          <button type="button" id="admin" name="button">Administrator</button>
          <button type="button" id="user" name="button">User</button>
          <center>
<div class="container" id="container">
  <?php
    require_once 'db_connection.PHP';
   ?>
  <form id="form1" action="login.PHP" method="post">
    <h1>Administrator's login form</h1>
    <input type="text" id="email" name="email" placeholder="Enter email"><br>
    <input type="text" id="password" name="password" placeholder="Enter password"><br>
    <input type="submit" id="submit" name="submit" value="login">
  </form>
</div>
<div class="container2" id="container2">
  <?php
    require_once 'db_connection.PHP';
   ?>
  <form id="form1" action="login.PHP" method="post">
    <h1>User's login form</h1>
    <input type="text" id="email" name="email" placeholder="Enter email"><br>
    <input type="text" id="password" name="password" placeholder="Enter password"><br>
    <input type="submit" id="submit" name="submit" value="login">
  </form>
</div>
</center>
          <img src="https://i.mycdn.me/i?r=AyH4iRPQ2q0otWIFepML2LxRDp41A5aByplUVkWZFbEqYg" alt="ACTIVE">
      </div>
    </div>

  </body>
</html>
