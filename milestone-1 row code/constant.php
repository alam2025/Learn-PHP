<?php
    define("eating","I am eating!",true);
    echo eating;

    echo "<h3>Constant array</h3>";
    define("Car",[
        "Toyota",
        "Volvo",
        "Tata",
        "BMW"
    ]);
    echo Car[2];

    echo "<h3>Constant are global </h3>";
    function myfun()
    {
        echo eating;
    }
    myfun();

    $x=3;
    $y=2;
    echo "<br>";
    echo $x ** $y;


?>