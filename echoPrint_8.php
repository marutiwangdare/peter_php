<?php
/*

PHP echo and print Statements
With PHP, there are two basic ways to get output: echo and print.


PHP echo and print Statements
echo and print are more or less the same. They are both used to output data to the screen.

The differences are small: echo has no return value while print has a return value of 1 so it can be used in expressions. 
echo can take multiple parameters (although such usage is rare) while print can take one argument. echo is marginally faster than print.

The PHP echo Statement
The echo statement can be used with or without parentheses: echo or echo().

Display Text

The following example shows how to output text with the echo command 
(notice that the text can contain HTML markup):

*/

echo("hi");
echo "<br>";
echo "<h2> php is fun !</h2>";
echo "<br>";
echo "This ", "string ", " multiple ";



/*
The PHP print Statement
The print statement can be used with or without parentheses: print or print().

Display Text

The following example shows how to output text with the print command (notice that the text can contain HTML markup):
*/

print "<h2>Hello world</h2>";
print "<br>";
print("hello");
//print "This ", "String ", " multiple ";
?>