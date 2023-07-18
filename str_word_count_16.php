<?php 
/*
tr_word_count() - Count Words in a String
The PHP str_word_count() function counts the number of words in a string.
*/
$count = str_word_count("Hello World!");

echo $count;

echo "<br>";

$count = str_word_count("Hello World  !");

echo $count;

echo "<br>";

$count = str_word_count("Hello World  a!");

echo $count;

echo "<br>";

$count = str_word_count("Hello World  a");

echo $count;
?>