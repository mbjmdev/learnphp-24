<?php

$myname = "John Abraham";
echo 'My name is '.$myname.'<br/>';
echo "My new name is $myname";

echo '<br/>';

$length_of_string = strlen($myname);
print($length_of_string);

echo '<br/>';


$str_word_count = str_word_count($myname);
print($str_word_count);

echo '<br/>';

echo strpos($myname, "ra"); //find the postion of a string

echo '<br/>';

$newcar = "  Lambo Gini  ";
echo strtoupper($newcar);   
echo '<br/>';
echo strtolower($newcar);

echo '<br/>';

echo str_replace("Lambo","Honda",$newcar); //replace a string

echo '<br/>';

echo strrev($newcar); //reverse a string

echo '<br/>';
echo $newcar;
echo '<br/>';
echo trim($newcar);
echo '<br/>';
$myaccounts = "sbi-iob-indian-muthoot-icici";
$string_array = explode("-",$myaccounts);
echo '<pre>';
var_dump($string_array);
print_r($string_array);
echo '</pre>';

//Concat String 

$a = "Honda";
$b = "City";

echo $a.' '.$b;
echo '<br/>';
echo "$a $b";

echo '<br/>';

$x = "Hello World!";
echo substr($x, 6, 3);


echo '<br/>';

$x = "We are the so-called \"Vikings\" from the north.";
echo $x;