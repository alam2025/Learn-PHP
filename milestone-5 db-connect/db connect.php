<?php
$servername="localhost";
$username="alam";
$password="alam12";

//mysqli object oriented 
$con=new mysqli($servername,$username,$password);
if($con->connect_error)
{
    die("Connection failesd" . $con->connect_error);

}
else
{
    echo "Connection successful";
}
$con->close();
/*
//mysqli procedural connection
$con= mysqli_connect($servername,$username,$password);

if(!$con)
{
    die("Connection failed" . mysqli_connect_error());
}
else
{
    echo "Connect success";
}
mysqli_close($con);
*/

?>