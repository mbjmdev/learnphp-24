<?php

/*
    int 
    float, double
    number strings -> strings
    Nan -> non a number 
    Infinity
*/

$a = 5;
$b = 3.5;
$c = NAN;
$d = "5";

if(is_int($d)){
    echo $a + $d;
} else {
    echo "$d is not an integer.<br/>";
    var_dump($d);
}

if(is_float($b)){
    echo '<br/>';
    echo $a + $b;
} else {
    echo "$b is not a float.<br/>";
}

if(is_nan($c)){
    echo '<br/>';
    echo "$c is not an number.";
}

if(is_numeric($b)){
    echo '<br>';
    echo 'Is an number';
}

if(is_numeric($d)){
    echo '<br>';
    echo $d.' Is an number';
} else {
    echo '<br>';
    echo $d.'Is not an number';
}

if(is_finite($a)){
    echo '<br>';
    echo 'Yes. Finite';
}

if(is_infinite($a)){
    echo '<br>';
    echo 'Yes. Not Finite';
}

/*Type Casting*/
echo '<br>';

$y = 5.6;
$z = (int)$y;
var_dump($z);

echo '<br>';
$y = (float)"5";
var_dump($y);

echo '<br>';
$z = (int)$y;
var_dump($z);

echo '<br>';
$t = "5";
$r = 5;
if(is_numeric($t)){
    $x = (int)$t + $r;
    var_dump($x);
} else {
    echo 'Operation Failed. '.$t.' is not a number';
}

/*
    (string) - Converts to data type String
    (int) - Converts to data type Integer
    (float) - Converts to data type Float
    (bool) - Converts to data type Boolean
    (array) - Converts to data type Array
    (object) - Converts to data type Object
    (unset) - Converts to data type NULL
*/