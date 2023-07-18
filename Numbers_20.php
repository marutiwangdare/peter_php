<?php 
/*
In this chapter we will look in depth into Integers, Floats, and Number Strings.

PHP Numbers
One thing to notice about PHP is that it provides automatic data type conversion.

So, if you assign an integer value to a variable, the type of that variable will automatically
be an integer. Then, if you assign a string to the same variable, the type will change to a string.

This automatic conversion can sometimes break your code.
*/

$var = "hello world";
var_dump($var);

echo "<br>";

$var = 10;
var_dump($var);

echo "<br>";

$var = 1.0;
var_dump($var);
?>