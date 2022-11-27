<?php
function my_callback($str)
{
    return strlen($str);
}
$string= ["apple","orange","potato","banana","coconut"];
$length = array_map("my_callback",$string);
print_r($length);
?>

<?php
echo "<br>";
//anonymous function
$string= ["apple","orange","potato","banana","coconut"];
$length = array_map(function($item){return strlen($item);}, $string);
print_r($length);
?>

<?php
function exclaim ($str)
{
    return $str . "!";
}

function ask($str)
{
    return $str . "?";
}

function formatted($str, $format)
{
    echo $format($str);
}

formatted("Hello", "exclaim");
formatted("Hello", "ask");

?>