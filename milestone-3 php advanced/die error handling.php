<?php
    $file= fopen("test.txt", "r") or die("file not open");
    echo  fread($file,filesize("test.txt"));
?>