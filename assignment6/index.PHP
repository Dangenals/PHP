<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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

    </style>
  </head>
  <body>
    <?php
    //CONNECTING TO DB
    require_once 'db_connection.PHP';

    //--CLASS FOR DB
    class ConnectDB{
      //--PRIVATE
      private $host;
      private $user;
      private $password;
      private $db;

      //--PROTECTED METHOD--
      //--METHOD-FUNCTION
      protected function connection(){
        $this->host="localhost";
        $this->user="user1";
        $this->password="123";
        $this->db="rank";

      $conn = new mysqli($host,$user,$password,$db);
      return $conn;
    }

    }


    //--CLASS INHERITANCE
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
    public $avgGPA;



    //--CONSTRUCTOR--
     function __construct($name, $location, $rating){
      $this->name=$name;
      $this->location=$location;
      $this->rating=$rating;
    }

      //--SETTERS AND GETTERS--
      //--PUBLIC METHOD--
    public function set_best_subject($best_subject){
      $this->best_subject=$best_subject;
    }

    public function get_best_subject(){
      return $this->best_subject;
    }
     //--SETTERS AND GETTERS--
     //--PUBLIC METHOD--
    public function set_acceptance_rate($acceptance_rate){
      $this->acceptance_rate=$acceptance_rate;
    }

    public function get_acceptance_rate(){
      return $this->acceptance_rate;
    }
      //--SETTERS AND GETTERS--
      //--PUBLIC METHOD--
    public function set_cost($cost){
      $this->cost=$cost;
    }

    public function get_cost(){
      return $this->cost;
    }
    //--SETTERS AND GETTERS--
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


    //--METHOD - FUNCTION ( NOT GETTER OR SETTER)
    //THIS IS NOT A GETTER!
    //--METHOD TO OUTPUT ALL THE DATA AS A TABLE FROM DB
    public function get_data(){
      //SORTING BY GENERAL RATING
      $sql = "SELECT rating, name, location, best_subject, acceptance_rate, cost FROM `universities` ORDER BY rating";
      $conn = new mysqli("localhost", "user1", "123", "rank");
      if ($conn->connect_error) { die( $conn->connect_error);
      }
         $result = $conn->query($sql);

         if ($result->num_rows > 0) {
           echo '<table class="table table-hover"><tr><th>Place</th><th>Name</th><th>Location</th><th>Best subject</th><th>Acceptance rate</th><th>Tuition fees</th></tr>';
           while($row = $result->fetch_assoc()) {
             echo "<tr><td>".$row["rating"]."</td><td>".$row["name"]."</td><td> ".$row["location"]."</td><td>".$row["best_subject"]."</td><td> ".$row["acceptance_rate"]."</td><td> ".$row["cost"]."</td></tr>";
           }
           echo "</table>";
         } else {
           echo "0 results";
         }
         $conn->close();
    }

    //--STATIC METHOD
    // METHOD
     static function scholarship($cost, $acceptance_rate){
      if($acceptance_rate>7){
        $cost/=10;
        return ($cost*$acceptance_rate)*0.25;
      }
    }

    //--DESTRUCTOR--
    //--DESTRUCTOR--
    //--PUBLIC FUNCTION--
    public function __destruct(){
      print " {$this->name} is located in {$this->location}";
      echo "<br>";
      print "According to the rating it takes position {$this->rating}";
      echo "<br>";
      print "The best subject is: {$this->best_subject}";
      echo "<br>";
      print "Your chance to get in it, is nearly {$this->acceptance_rate}";
      echo "<br>";
      print "It costs {$this->cost} per year";
      echo "<br>";
    }
  }

    ?>
    <center><div class="jumbotron">
    <form>
    <div>
      <div class="page-header">
  <h1>Top 20 best universities of USA</h1>
      </div>
      <div class="alert alert-info">
  <strong>Info!</strong> You can also see the rating of universities in definite subjects or areas.
  <?php
      //--CONSTANT
      //__CONSTANT
        define('info', "You can see the rating in Mathematics and Economics");
        print info;
        ?>
      </div>
    <a href="research.PHP"><button type="button" class="btn btn-primary">Research Universities</button></a>
    <a href="academic.PHP"><button type="button" class="btn btn-success">Academic Universities</button></a>
    </div>
    <div>
      <?php
      //OBJECT IS CREATED
      //--USING CONSTRUCTOR
      //--USING SETTERS AND GETTERS
      //--DISTRUCTOR IS IMPLEMENTED
      $university = new University("MIT", "Boston",1);
      $university->set_best_subject("Computer Science");
      $university->set_acceptance_rate("4%");
      $university->set_cost("70000$");
      $university->get_best_subject();
      $university->get_acceptance_rate();
      $university->get_cost();

        //--IMPLEMENTING STATIC METHOD
        echo "The possible scholarship for 50000$ and acceptance rate
        higher that 10% is nearly ".University::scholarship(50000, 10)."$";



      //--IMPLEMENTING METHOD OF GETTING ALL THE GENERAL RATING FROM DATABASE
     //--IMPLEMENTING METHOD OF GETTING ALL THE GENERAL RATING FROM DATABASE
      echo $university-> get_data();
       ?>
    </div></form></div></center>
  </body>
</html>
