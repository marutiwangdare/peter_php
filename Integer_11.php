<?php 
/*

PHP Integer
An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.

Rules for integers:

An integer must have at least one digit
An integer must not have a decimal point
An integer can be either positive or negative
Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation

In the following example $x is an integer. The PHP var_dump() function returns the data type and value:

*/

$x = 574;
$x1 = -573;
$x2 = +573;
$y = 57.4;
$str = "hello";
$snum ="123";

var_dump($x);
echo "<br>";
var_dump($x1);
echo "<br>";
var_dump($x2);
echo "<br>";
var_dump($y);
echo "<br>";
var_dump($str);
echo "<br>";
var_dump($snum);
?>