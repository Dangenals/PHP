<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div id="clickme">
      Click here
    </div>
    <img id="book" src="book.png" alt="" width="100" height="123">
    $(document).readySSSS(function() {
      $( "#book" ).fadeIn( "slow", function() {
        // Animation complete
      });
    });

  </body>
</html>
