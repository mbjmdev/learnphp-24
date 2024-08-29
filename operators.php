<?php
/*
Arithmetic operators
Assignment operators
Comparison operators
Increment/Decrement operators
Logical operators
String operators
Array operators
Conditional assignment operators
 */

$a = 5;
$b = "5";

if($a == $b){
    echo "$a is equal to $b";
} else {
    echo "$a is not equal to $b";
}

echo '<br>';
if($a === $b){
    echo "$a is equal to $b";
} else {
    echo "$a is not equal to $b";
}

echo '<br>';
if($a != $b){
    echo "$a is not equal to $b";
} else {
    echo "$a is  equal to $b";
}

$z = 9;

echo '<br>';
echo $z++;
echo '<br>';
echo $z;

echo '<br>';
echo ++$z;
echo '<br>';
echo $z;

echo '<br>';
echo $z--;

echo '<br>';
echo --$z;

echo '<br>';

$j = "honda";
$j .= " maruthi";
$j .= " swift";
echo $j;

echo '<br>';

/*Null coalescing*/

$a = null;
$b = null;
$c = 8;
echo $a ?? $b ?? $c;