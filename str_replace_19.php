<?php 
/*
str_replace() - Replace Text Within a String
The PHP str_replace() function replaces some characters with some other characters in a string.
*/
$str = "Hello world!";

echo str_replace("world", "Dolly", $str);


echo "<br>";

$str = "Hello world!";

echo str_replace("l","L", $str);

echo "<br>";

$str = "Hello world!";

echo str_replace("!","@", $str);

?>