<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Array Length</h3>
    <?php
    $car=array("Volvo","Toyoya","BMW");
    for($x=0 ; $x<count($car); $x++)
    {
        echo $car[$x]."<br>";
    }
    ?>
</body>
</html>