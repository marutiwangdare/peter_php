<?php 
//constants_for_integers_22.php

/*
PHP has the following predefined constants for integers:

PHP_INT_MAX - The largest integer supported
PHP_INT_MIN - The smallest integer supported
PHP_INT_SIZE -  The size of an integer in bytes
*/

echo "The largest integer supported :  " , PHP_INT_MAX;

echo "<br>The smallest integer supported :  " , PHP_INT_MIN;

echo "<br> The size of an integer in bytes :  " , PHP_INT_SIZE;

echo "<br><br><br>";


$num1 = 9223372036854775807;
$num2 = 9223372036854775808;

echo "<br>largest integer supported : ", $num1;
echo "<br> outside of max limit : ", $num2;

echo "<br><br><br>";

$num1 = -9223372036854775807;
$num2 = -9223372036854775808;

echo "<br>smallest integer supported : ", $num1;
echo "<br> outside of small limit : ", $num2;
?>