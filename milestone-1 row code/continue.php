<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Continue statement use</h3>
    <?php
    $count=0;
        for($i=1;$i<=100;$i++)
        {
            if($i%5!=0)
            {
                continue;
            }
           $count++;
            echo "Number is : $i <br>";
        }

        echo "Multiplication of % is : $count <br>";

    ?>
</body>
</html>