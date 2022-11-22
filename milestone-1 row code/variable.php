<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP variable</title>
</head>
<body>
    <h1>PHP variable</h1>

    <?php 
        $txt ="Hello Doly!!";
        $x=10;
        $y=20.5;

        // echo $txt ;
        // echo "<br>";
        // echo $x ;
        // echo "<br>";
        // echo $y;

        // echo $txt . "<br>" . $x . "<br>" . $y ."<br>". "End" . "<br>";

        // echo "Addtion " . $x ." & ".$y ." is: ";
        // echo  $x+$y;

        //local and global variable

        function test(){
            global $x;
            echo "<P> This is inside a function: $x </p>";
        }
        test();

        echo "<P> This is outside a function: $x </p>";

        function global_variable()
        {
            $GLOBALS['y']= $GLOBALS['x'] + $GLOBALS['y'];
        }

        global_variable();

        echo "<P> this is global side: $y </p>";

        //static keyword
        function static_key()
        {
            static $x=0;
            echo $x;
            $x++;
        }
        static_key();
        echo "<br>";
        static_key();
        echo "<br>";
        static_key();
        echo "<br>";
        static_key();


        
    ?>
</body>
</html>