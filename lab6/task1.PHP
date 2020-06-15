<?php
define("numberOfSides", "0");
echo numberOfSides;
class Figure{
  private $area;
  private $color;

  function info_about(){
    echo 'This is a geometric shape';
  }

  function set_area($area){
    $this -> area = $area;
  }

  function set_color($color){
    $this -> color = $color;
  }

  function get_area(){
    return $this -> $area;
  }

  function get_color(){
    return $this -> $color;
  }
}

class Rectangle extends Figure{
  private $a;
  private $b;
  const numberOfSides = 4;

  function __construct($a, $b){
    $this -> a = $a;
    $this -> b = $b;
  }

  public function get_area(){
    return $this->a * $this->b;
  }
}
class Triangle extends Figure{
  private $a;
  private $b;
  private $c;
  const numberOfSides = 4;

  function __construct($a, $b, $c){
    $this -> a = $a;
    $this -> b = $b;
    $this -> c = $c;
  }

  function get_area(){
    $p = ($a + $b + $c) / 2;
    return sqrt($p*($p-$a)*($p-$b)*($p-$c));
  }
}
class Square extends Figure{
  private $a;
  const numberOfSides = 4;

  function __construct($a){
    $this -> a = $a;
  }
}

$figure = new Figure();
$figure -> info_about();

$rectangle = new Rectangle(2, 3);
echo $rectangle->get_area();
 ?>
