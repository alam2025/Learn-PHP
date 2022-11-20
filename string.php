<?php
$x="Hello world!!";

echo "<h3> Find Length of String </h3>";
echo strlen($x);
echo "<br>";

echo "<h3> count word  of String </h3>";
echo str_word_count($x);

echo "<h3> Reverse the  String </h3>";
echo strrev($x);

echo "<h3> Search position  of String </h3>";
echo strpos("Hello World","l");

echo "<h3> string replace using str_replace </h3>";
echo  str_replace("World", "Dolly","Hello World");

?>