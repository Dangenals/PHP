<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <title></title>
 </head>
 <body>



     <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
    <input type="text" name="member">
    <input type="submit" name="Check" value="Check">
        </form>



 </body>
 </html>



<?php


    class Club
    {
        private $name;
        protected $members = array();
        function getName()
        {
            return  $this->name;
        }
        function isMembers($club_member){
                if (in_array($club_member, $this->members)) {
                    echo $club_member. " is a member of the club ".$this->name;
                }else {
                    echo $club_member. " is not a member of the club".$this->name;
                }
        }
          function __construct($name, $members)
              {
                  if(is_array($members)){
                    $this->name = $name;
                    $this->members = $members;
                  }
                  else{
                    throw new Exception('The member is not in the array');

                    }
                  }




        }


                      function myException($e){
                        echo "Exception caught ".$e->getMessage();
                      }
              set_exception_handler('myException');


                  $math_club_students = array("Askar", "Darmen", "Saniya");
                  //$math_club_students = "Askar, Darmen, Saniya";
                  $test_member="Test";

                  $math_club = new Club("Math", $math_club_students);

                  $math_club->isMembers($test_member);



 ?>
