<?php 
/*
A variable can have a short name (like x and y) or a more descriptive name 
(age, carname, total_volume).

Rules for PHP variables:

A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables)
Remember that PHP variable names are case-sensitive!
*/

//x = 10;
$x = 10;
// a-z A-Z _
//$1x = 10;
$x1 = 10;
$_x = 10;
//$x@y = 10;
//$x!20 = 10;

$age = 10;
$AGE = 20;
$Age = 30;

echo $age ;
echo "<br>";
echo $AGE;
echo "<br>";
echo $Age;

?>