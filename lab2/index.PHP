<!DOCTYPE html>
<html>
<head>
	<title>Lab</title>
</head>
<body>

<?php

$str1 = "sometext";
$res1 = strtoupper($str1);
print "$res1<br>";

$str2 = "SOMETEXT";
$res2 = strtolower($str2);
print "$res2<br>";


$str = "Here is the default sentence";
echo substr($str,12);
echo '<br>';


$str = "Daniyal Ganiuly";
print "$str";
echo strlen($str);
echo '<br>'
?>

<?php
$n=0;
$max=100;
while($n<$max){
	$n+=10;
echo $n." ";
}


$cars = array(
     "Toyota"=>"Camry",
     "Mercedes"=>"GL450",
     "Bentley"=>"Continental",
     "BMW"=>"M5",
     "Rolls Royce"=>"Phantom"
 );
 echo '<table border="1px black solid">';
 echo '<tr class="keys">';
 $i=0;
 foreach($cars as $key=>$value){
    if($i%2 == 0){
        echo "<th class='values'> {$key}</th>";
    }
    if($i%2 != 0){
        echo "<th class='keys'>{$key}</th>";
    }
    $i++;
}
echo '</tr>';
 echo '<tr class="values">';
 foreach($cars as $key=>$value){
    if($i%2 == 0){
        echo "<th class='values'> {$value}</th>";
    }
    if($i%2 != 0){
        echo "<th class='keys'>{$value}</th>";
    }
    $i++;
};
echo '</tr>';
echo '</table>';
echo "<br>";

$univer = array('Astana IT University' => ['Nur-Sultan', 'Kazakhstan'],
    'KBTU' => ['Almaty', 'Kazakhstan'] ,
    'SDU' => ['Almaty','Kazakhstan'],
    'KIMEP' => ['Almaty','Kazakhstan'],
    'MSU' => ['Moscow','Russia' ],
    'Harvard' => ['Boston','USA'],
    'Stanford'=> ['California','USA'],
    'Oxford' => ['Oxford','UK']
) ;
print "<table border=1px>";
foreach ($univer as $key => $value) {
    $i = 0;
    $j = 1;
    print "<tr><td>$key</td><td>$value[$i]</td><td>$value[$j]</td></tr>";
}
print "</table>";

echo '<table border="1px black solid"><tr>';
for($i=0;$i<10;$i++){
    if($i%2 == 0){
        echo "<th class='values'> {$i}</th>";
    }
    if($i%2 != 0){
        echo "<th class='keys'>{$i}</th>";
    }
}
echo '</tr></table>';
$array = array(4,1,3,2,5);
sort($array);
foreach($array as $value){
    echo "$value";
}
rsort($array);
echo '<br>';
foreach($array as $value){
    echo "$value";
}
$companyNumber = array(
    1 => 5,
    3 => 6,
    5 => 1
);
asort($companyNumber);
echo '<br>';
foreach($companyNumber as $key=>$value){
    echo "$key = $value<br>";
}
echo '<br>';
ksort($companyNumber);
foreach($companyNumber as $key=>$value){
    echo "$key = $value<br>";
}
echo '<br>';
krsort($companyNumber);
foreach($companyNumber as $key=>$value){
    echo "$key = $value<br>";
}
echo '<br>';
arsort($companyNumber);
foreach($companyNumber as $key=>$value){
    echo "$key = $value<br>";
}
?>
</body>
</html>
