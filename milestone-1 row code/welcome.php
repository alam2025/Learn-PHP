<?php
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $n= $_POST['name'];
        $e= $_POST['email'];

        if(empty($n) && empty($e))
        {
            echo "Email and email is empty";
        }
        else
        {
            echo "Welcome ".$n ."<br>";
            echo "Your email is :".$e."<br>";
        }
    }
?>

<!-- Welcome <?php echo $_POST["name"]; ?><br>
Your email address alam is: <?php echo $_POST["email"]; ?> -->