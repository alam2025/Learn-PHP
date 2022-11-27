<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date</title>
</head>

<body>
    <h1 style="text-align:center;">
        <?php
        echo "Today is : " . date("d/m/y") . "<br>";
        echo "Today is : " . date("d-m-y") . "<br>";
        echo "Today is : " . date("d.m.y") . "<br>";
        echo "Today is : " . date("l") . "<br>";
        ?>

        
    </h1>

    &copy; 2010-<?php echo date("Y"); ?>

    <h3>Now time</h3>
    <?php

    $d = strtotime("today");
    //$d=mktime(12,43,54,13,10,2023);
    //date_default_timezone_set("Bangladesh/Dhaka");
     echo "The time is : ". date("d-m-y h:i:sa",$d);
     
     echo"<br>";
     $d = strtotime("tomorrow");
     echo "The time is : ". date("d-m-y h:i:sa",$d);

     echo"<br>";
     $d = strtotime("yesterday");
     echo "The time is : ". date("d-m-y h:i:sa",$d);

     echo"<br>";
     $d = strtotime("+3 month");
     echo "The time is : ". date("d-m-y h:i:sa",$d);
     ?>

     <?php
     echo "<h3> strtotime() used</h3>";
     $start = strtotime("tuesday");
     $end = strtotime("+6 week",$start);

     while($start<$end)
     {
        echo date("M d",$start);
        echo "<br>";
        $start = strtotime("+1 week",$start);
     }

     ?>

     
</body>

</html>