<?php

$car = array("Volvo","Toyota","Tata","BMW");

foreach($car as $value){
    echo "$value <br>";
}

$name = array('Alam','Kalam','Chalam','Talam','Malam');
echo "<b><br> for each use<br></b>";
foreach($name as $value){
    echo "$value <br>";
}

echo "<b><br> for each use<br></b>";
$age = array("Alam"=>'23', "Talom"=>"43","Malom"=>"32");
foreach($age as $x=>$val)
{
    echo "$x = $val <br>";
}

?>