<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session2</title>
</head>
<body>
    <?php
    //echo "Favourite color is :" . $_SESSION["favcolor"] . "<br>";
    //echo "Favourite color is :" . $_SESSION["favAnimal"] . "<br>";
    print_r($_SESSION);
    ?>
</body>
</html>