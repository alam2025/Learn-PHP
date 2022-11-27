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

    $createfile= fopen("test.txt","r") or die("Unable to file access");
    echo fread($createfile,filesize("test.txt"));
    /*$txt = "Hello doly!<br>";
    fwrite($createfile,$txt);

    $txt= "You are bunny";
    fwrite($createfile, $txt);*/

    fclose($createfile);

    ?>
</body>
</html>