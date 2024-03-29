<?php 
/*
PHP NULL Value
Null is a special data type which can have only one value: NULL.

A variable of data type NULL is a variable that has no value assigned to it.

Tip: If a variable is created without a value, it is automatically assigned a value of NULL.

Variables can also be emptied by setting the value to NULL:
*/

$x;
var_dump($x);

$x = "hello world";
echo "<br>";
var_dump($x);

$x = NULL;
echo "<br>";
var_dump($x);

?>