function colChGreen(){
      let el = document.querySelectorAll(".black");
      for (let i = 0; i < el.length; i++) {
      el[i].style.backgroundColor = "#4db24d";
      }
      let el1 = document.querySelectorAll(".white");
      for (let i = 0; i < el1.length; i++) {
      el1[i].style.backgroundColor = "white";
      }
       document.getElementById("qwe").innerHTML = "";
    }
    function colChDefault(){
      var all = document.getElementsByClassName("black");
      for (var i = 0; i < all.length; i++) {
      all[i].style.backgroundColor = "#999";}

      let el = document.querySelectorAll(".white");
      for (let i = 0; i < el.length; i++) {
      el[i].style.backgroundColor = "#fff";
      }
      var bd = document.getElementsByClassName("border");
      for (var i = 0; i < bd.length; i++) {
      bd[i].style.backgroundImage = "none";
      }
      document.getElementById("qwe").innerHTML = "";

  }
    function colChMetalic(){
      var all = document.getElementsByClassName("black");
      for (var i = 0; i < all.length; i++) {
      all[i].style.backgroundColor = "#0034ff";

      let el = document.querySelectorAll(".white");
      for (let i = 0; i < el.length; i++) {
      el[i].style.backgroundColor = "#33fff89c";
      }
    }
    document.getElementById("qwe").innerHTML = "";
    }
    function colChWood(){
      var all = document.getElementsByClassName("border");
      for (var i = 0; i < all.length; i++) {
      all[i].style.backgroundImage = "url('wood.jpg')";
      }
      document.getElementById("qwe").innerHTML = "";
    }
      function colChAqua()
      {
        try
        {
          //document.getElementsByClassName("board").style.backgroundColor = "aqua";
          var x = document.getElementsByClassName("border")
          console.log(x.length)
          for(let a = 0; a<x.length+2; a++)
          {
            x[a].style.backgroundColor = "aqua";

          }

        }

        catch(err)
        {
          console.log("Error:"+err.message);
          document.getElementById("qwe").innerHTML = "Somеthing is wrong";
        }
        finally
        {
          console.log("you MUST CHANGE CODE");
        }
      }
      function colChYellow(){
      try
      {
       a=document.getElementsByClassName("board");
       a.style.backgroundColor = "yellow";
      }
      catch(err) {
      console.log("FOR you:"+err.message);
      }
      finally{
      colChDefault();
        }
      }
//
    function rotate() {
    var el = document.getElementById("rotate");
    el.classList.toggle("rotate");
    }
  
