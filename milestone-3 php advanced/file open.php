<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $myfile = fopen("New Text Document.txt", "r") or die("Unable to open file");
    //echo fread($myfile, filesize("New Text Document.txt"));
    while(!feof($myfile))
    {
        echo fgetc($myfile);
       // echo "<br>";

    }
  //  echo fgets($myfile); //read single line from file
    fclose($myfile);
    ?>
</body>

</html>