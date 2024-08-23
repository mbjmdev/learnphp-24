<?php 
/*
A variable starts with the $ sign, followed by the name of the variable
A variable name must start with a letter or the underscore character
A variable name cannot start with a number
A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
Variable names are case-sensitive ($age and $AGE are two different variables)
*/

$age = "5";
$AGE = 6;
echo $age;
var_dump($AGE); /*to find type*/
echo $AGE;
echo '<br/>';

$x = 5;
$y = $x;
$z = $y;

$x = $y = $z = 5;

echo $z;