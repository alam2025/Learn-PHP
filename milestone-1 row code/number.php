<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $x=34345;

    var_dump(is_int($x));
    echo "<br>";

    $x= 34.34;
    var_dump(is_int(($x)));

    echo "<h3> Check Numeric </h3>";
    $x=343.354;
    var_dump(is_numeric($x));
    echo "<br>";

    $x="4e545";
    var_dump(is_numeric($x));
    echo "<br>";

    $x="120"+200;
    var_dump(is_numeric($x));
    echo "<br>";

    $x="I am Alam";
    var_dump(is_numeric($x));
    echo "<br>";

    echo "<h3> Casting String and float into integer</h3>";
    $x=34.55;
    $cast_int = (int)$x;
    echo $cast_int;
    echo "<br>";

    $x="2323.43";
    $cast_int = (int)$x;
    echo $cast_int;



?>
</body>
</html>