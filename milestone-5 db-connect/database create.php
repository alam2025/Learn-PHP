<?php
    $serverName= "localhost";
    $userName = "alam";
    $password = "alam12";
    /*
//create database procedural process
    $con = mysqli_connect($serverName,$userName,$password);

    if(!$con)
    {
        die("Connection failed" . mysqli_connect_error());
    }
    
    $sql = "create database hall_room";
    if(mysqli_query($con,$sql))
    {
        echo "Database Created successful";
    }else{
        echo "not created" . mysqli_error($con);
    }
    mysqli_close($con);*/

    //creating database  object oriented process
    $con = new mysqli($serverName,$userName,$password);
    if($con->connect_error)
    {
        die("Connection failed". $con->connect_error);
    }
    
    $sql = "Create Database hall_room";
    if($con->query($sql)===TRUE){
        echo "Database created successfully";
    }else{
        echo "Database not created" . $con->error;
    }
?>