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
                    echo $club_member. " is not a member of the club";
                }
        }



        function __construct($name, $members)
            {
                $this->name = $name;
                $this->members = $members;
            }

    }










    //if (isset($_POST['Check'])){
        //$club1->isMembers($_POST['member']);
    //}



    class Union extends Club{
        function __construct($name,$Clubs){
        parent::__construct($name, $Clubs);
        foreach ($Clubs as $Club) {
            if (! $Club instanceof Club){



              echo 'Elements of $Clubs must be Club objects';
         }
        }
    }
    public function isMembers($club_member){
        $counter=1;
        foreach ($this->members as $Club) {
        $counter+=1;
         $Club->isMembers($club_member);
    }




}
}
    $Clubs= array("Math","Physics","English","Chemistry");
    $Math_Students = array("Askar", "Darmen", "Saniya");
    $Volley_Students = array("Maksat", "Alinur", "Azamat");
    $English = array("Abay", "Alina", "Askar");
    $Chemistry = array("Askar", "Uldana", "Aidar");




    $club1 = new Club("MathClub", $Math_Students);
    $club2 = new Club("Volley_Students", $Volley_Students);
    $club3 = new Club("English", $English);
    $club4 = new Club("Chemistry", $Chemistry);



    $Club_array= array($club1,$club2,$club3,$club4);



    $Union1=new Union("Student_clubs",$Club_array);




    if (isset($_POST['Check'])){
        $Union1->isMembers($_POST['member']);
    }



 ?>
