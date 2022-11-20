<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Multidimentional array</h3>
    <?php
    $car=array(
        array("Volvo",22,18),
        array("BMW",34,22),
        array("Toyota",54,12),
        array("Tata",12,23)
    );

    for($row=0; $row<4;$row++){
        echo "<h4>Row number $row</h4>";
        echo "<ul>";
        for($col=0;$col<3;$col++)
        {
            echo "<li>". $car[$row][$col]. "</li>";
        }
        echo "</ul>";
    }

    ?>
</body>
</html>