<?php
$str = "<h1>HEllo year</h1><br>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr . "<br>";


//check integer
$int = "0";

if (!filter_var($int, FILTER_VALIDATE_INT) === false || filter_var($int, FILTER_VALIDATE_INT) === 0) {
    echo "Integer is valid";
} else {
    echo "Not valid";
}

//validate IP address
$ip="127.0.0.1";


if(!filter_var($ip,FILTER_VALIDATE_IP)===false)
{
    echo "<br>$ip is valideate ";
}else{
    echo "<br>$ip is not validate";
}

//Validate email
$email="alam1310@gmail.com";
$email = filter_var($email,FILTER_SANITIZE_EMAIL);
if(!filter_var($email, FILTER_VALIDATE_EMAIL)===false)
{
    echo "<br> $email is a valid";
}else{
    echo "<br> $email is not a valid";
}

?>
