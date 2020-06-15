<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js" crossorigin="anonymous"></script>
      <script>
      $(document).ready(function()
  {
    var readerView = true;
    $("#academic").click(function()
    {
      if(readerView == false)
      {
        $('#block1').hide();
        readerView = true;
      }
      else
      {
        $('#block1').show();
        readerView = false;
      }
    });
  });
  </script>
  <script>
         $(document).ready(function()
  {
    var readerView = true;
    $("#economics").click(function()
    {
      if(readerView == false)
      {
        $('#block2').hide();
        readerView = true;
      }
      else
      {
        $('#block2').show();
        readerView = false;
      }
    });
  }); 
  </script>
  <script>
          $(document).ready(function()
  {
    var readerView = true;
    $("#math").click(function()
    {
      if(readerView == false)
      {
        $('#block3').hide();
        readerView = true;
      }
      else
      {
        $('#block3').show();
        readerView = false;
      }
    });
  });
  </script>
    <style media="screen">
    *{
      padding: 10px;
      margin: 0px;
    }

    a{
    text-decoration: none;
    color: white;
    }

    a:hover{
      text-decoration: none;
      color: white
    }

    table{
      background: #E5E8E8 ;
      border-radius: 10px;
    }
    .jumbotron{
      padding: 50px;
      color: black;
      display: flex;
      width: 75%;
      justify-content: space-around;
    }

    #block1{
      display: none;
    }

    #block2{
      display: none;
    }

    #block3{
      display: none;
    }

    </style>
  </head>
  <body>
    <?php
    //--CONNECTING TO DB
    require_once 'db_connection.PHP';


    //--CONNECTING TO DB WITH OOP
    class ConnectDB{
      //PRIAVATE FIELDS
      private $host;
      private $user;
      private $password;
      private $db;

      //--PROTECTED METHOD--
      protected function connection(){
        $this->host="localhost";
        $this->user="user1";
        $this->password="123";
        $this->db="rank";

      $conn = new mysqli($this->host,$this->user,$this->password,$this->db);
      return $conn;
    }

    }



    //--CLASS--
    //--INHERITANCE
    class University extends ConnectDB{
      //--PUBLIC--
    public $name;
    public $location;
    public $rating;
    //--PRIVATE--
    private $best_subject;
    private $acceptance_rate;
    private $cost;
    //--PROTECTED--
    protected $mathematics_rating;
    protected $economics_rating;


    //--CONSTRUCTOR--
     function __construct($name, $location, $rating){
      $this->name=$name;
      $this->location=$location;
      $this->rating=$rating;
    }

      //--SETTERS AND GETTERS--
    public function set_best_subject($best_subject){
      $this->best_subject=$best_subject;
    }

    public function get_best_subject(){
      return $this->best_subject;
    }

    public function set_acceptance_rate($acceptance_rate){
      $this->acceptance_rate=$acceptance_rate;
    }

    //--PUBLIC METHOD
    public function get_acceptance_rate(){
      return $this->acceptance_rate;
    }
      //--SETTERS AND GETTERS--
    public function set_cost($cost){
      $this->cost=$cost;
    }

    public function get_cost(){
      return $this->cost;
    }
    //--PUBLIC METHOD
    public function set_mathematics_rating($mathematics_rating){
      $this->mathematics_rating=$mathematics_rating;
    }

    public function get_mathematics_rating(){
      return $this->mathematics_rating;
    }
      //--SETTERS AND GETTERS--
    public function set_economics_rating($economics_rating){
      $this->economics_rating=$economics_rating;
    }

    public function get_economics_rating(){
      return $this->economics_rating;
    }


    //--THIS IS NOT A GETTER!!!
    //--PUBLIC METHOD
    //--METHOD TO OUTPUT THE ACADEMIC RATING FROM DB IN TABLE FORMAT
    public function get_data(){

      //SORING BY ACADEMIC RATING
      $sql = "SELECT academic_rate, name, location, best_subject, acceptance_rate, cost FROM `universities` ORDER BY academic_rate";
      $conn = new mysqli("localhost", "user1", "123", "rank");
         $result = $conn->query($sql);
         if ($result->num_rows > 0) {
           echo '<table class="table table-hover"><tr><th>Place</th><th>Name</th><th>Location</th><th>Best subject</th><th>Acceptance rate</th><th>Tuition fees</th></tr>';
           while($row = $result->fetch_assoc()) {
             echo "<tr><td>".$row["academic_rate"]."</td><td>".$row["name"]."</td><td> ".$row["location"]."</td><td>".$row["best_subject"]."</td><td> ".$row["acceptance_rate"]."</td><td> ".$row["cost"]."</td></tr>";
           }
           echo "</table>";
         } else {
           echo "0 results";
         }
         $conn->close();
    }

    //--DESTRUCTOR--
    //--DESTRUCTOR--
    public function __destruct(){
      print " {$this->name} is located in {$this->location}";
      echo "<br>";
      print "According to the rating it takes position {$this->rating} ";
      echo "<br>";
      print "The best subject is: {$this->best_subject}";
      echo "<br>";
      print "Your chance to get in it, is nearly {$this->acceptance_rate}";
      echo "<br>";
      print "It costs {$this->cost} per year";
      echo "<br>";
    }
  }

    //--ABSTRACT CLASS--
    //--INHERITANCE--
   abstract class Academic extends University{
      //--STATIC FIELD
      static $gpa;
      //--STATIC OVERRIDE METHOD
      //--OVERRIDING A METHOD
      static function scholarship($gpa, $cost, $acceptance_rate){
       if($gpa>3.5){
         $cost/=15;
         return ($gpa*$cost*$acceptance_rate)/4;
       }
       }
    }


        //--FINAL CLASS--
        final class Economics extends Academic{

              //--OVERRIDE METHOD BY ECONOMICS
              public function get_data(){

                //SORING BY ECONOMICS RATING
                echo "<h1>Top universities in Economics</h1>";
                $sql = "SELECT economics_rating, name, location, best_subject, acceptance_rate, cost FROM `universities` ORDER BY economics_rating";
                $conn = new mysqli("localhost", "user1", "123", "rank");
                   $result = $conn->query($sql);

                   if ($result->num_rows > 0) {
                     echo '<table class="table table-hover"><tr><th>Place</th><th>Name</th><th>Location</th><th>Best subject</th><th>Acceptance rate</th><th>Tuition fees</th></tr>';
                     while($row = $result->fetch_assoc()) {
                       echo "<tr><td>".$row["economics_rating"]."</td><td>".$row["name"]."</td><td> ".$row["location"]."</td><td>".$row["best_subject"]."</td><td> ".$row["acceptance_rate"]."</td><td> ".$row["cost"]."</td></tr>";
                     }
                     echo "</table>";
                   } else {
                     echo "0 results";
                   }
                   $conn->close();
              }

        }

        final class Mathematics extends Academic{
          //--OVERRIDE METHOD BY ECONOMICS
          public function get_data(){
            //SORTING BY MATHEMATICS RATING
            echo "<h1>Top universities in Mathematics</h1>";
            $sql = "SELECT mathematics_rating, name, location, best_subject, acceptance_rate, cost FROM `universities` ORDER BY mathematics_rating";
            $conn = new mysqli("localhost", "user1", "123", "rank");
               $result = $conn->query($sql);
               if ($result->num_rows > 0) {
                 echo '<table class="table table-hover"><tr><th>Place</th><th>Name</th><th>Location</th><th>Best subject</th><th>Acceptance rate</th><th>Tuition fees</th></tr>';
                 while($row = $result->fetch_assoc()) {
                   echo "<tr><td>".$row["mathematics_rating"]."</td><td>".$row["name"]."</td><td> ".$row["location"]."</td><td>".$row["best_subject"]."</td><td> ".$row["acceptance_rate"]."</td><td> ".$row["cost"]."</td></tr>";
                 }
                 echo "</table>";
               } else {
                 echo "0 results";
               }
               $conn->close();
          }

        }
    ?>
    <center><div class="jumbotron">
    <form>
    <div>
      <div class="page-header">
  <h1>Top Academic universities</h1>
      </div>
      <div class="alert alert-info">
  <strong>Info!</strong> You can also see the rating of universities in definite subjects or areas.
  <?php
      //--CONSTANT
        define('info', "You can see the rating in Mathematics and Economics");
        print info;
        ?>
      </div>
    </div>
  <button type="button" id="academic" style="width: 200px" class="btn btn-primary">Academics</button>
  <button type="button" id="math" style="width: 200px" class="btn btn-success">Mathematics</button>
  <button type="button"id="economics" style="width: 200px" class="btn btn-info">Economics</button>
    <div>
      <?php
      //OBJECT
      //--USING CONSTRUCTOR
      //--USING SETTERS
      //--DISTRUCTOR IS IMPLEMENTED
      $university = new University("MIT", "Boston",1);
      $university->set_best_subject("Computer Science");
      $university->set_acceptance_rate("4%");
      $university->set_cost("70000$");
      //OBJECT
      $economics = new Economics("Cornell University", "Starkville", 12);
      //OBJECT
      $mathematics = new Mathematics("Yale", "Connecticut", 3);

      echo "The maximum scholarship you can get if you have GPA higher than 3.5
      is ".Academic::scholarship(3.7, 60000, 12)."$ as an average";
      //--IMPLEMENTING METHOD OF GETTING ALL RATING FROM DATABASE
     //--IMPLEMENTING METHOD OF GETTING ALL RATING FROM DATABASE
      ?>
    <div id="block1">
      <?php print $university-> get_data(); ?>
      
    </div>
    <div id="block2">
      <?php  print $economics ->get_data(); ?>
      
    </div>
    <div id="block3">
      <?php  print $mathematics ->get_data();?>
      
    </div>
    </div></form></div></center>
  </body>
</html>
