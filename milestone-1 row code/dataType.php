<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tyle</title>
</head>
<body>
    <?php
        print "<h1> Data Type </h1>";
        
        $x = true;
        var_dump($x);

        print "<h2>Array Data Type </h2>";
        $color = array("Red", "Green","Blue");

        var_dump($color);

        print "<h2>Object class </h2>";

        class Car
        {
            public $color;
            public $model;

            public function __construct($color,$model)
            {
                $this->color=$color;
                $this->model=$model;
            }

            public function msg()
            {
                return "My car is a ".$this->color ." ".$this->model . " !";
            }
        }

        $mycar = new Car("Red", "BMW");
        echo $mycar->msg();
        echo "<br>";
        $mycar = new Car("Green", "Volvo");
        echo $mycar->msg();

        print "<h2>NULL Value </h2>";

        $x=NULL;
        var_dump($x);


    ?>
</body>
</html>