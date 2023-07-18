<?php 
/*
strpos() - Search For a Text Within a String

The PHP strpos() function searches for a specific text within a string. 
If a match is found, the function returns the character position of the first match.
If no match is found, it will return FALSE.

Tip: The first character position in a string is 0 (not 1).

example

search for the text "world" in the string "Hello world!"
*/

$find = "world";
$str = "Hello world! world";

echo strpos($str , $find);

echo "<br>";

echo "is Hello present? :", strpos($str, "Hello");

echo "<br>";

echo "is x present? :",strpos($str, "x"); // echo is not able to print the FALSE THATS WHY BLANK OUTPUT

echo "<br>";

var_dump(strpos($str, "x"));

echo "<br>";

var_dump(strpos($str, "Hello")); 
?>