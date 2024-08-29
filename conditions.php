<?php 

$a = 3;
$b = 5;
$c = 7;
$d = 9;

if($a > $b){
    echo "$a lesser than $b";
} else {
    echo "$b greather than $a";
}

echo '<br>';

/* if short hand*/

echo $a < $b ? "$a is lesser than $b" : "$a is greather than $b";

echo '<br>';

if($a > $b){
    echo "$a lesser than $b";
}
else if($a > $c){
    echo "$a is greather than $c";
} else {
    echo "$b greather than $a";
}

echo '<br>';
/*Switch*/

$favcolor = "black";

switch ($favcolor) {
  case "red":
    echo "<h4 style='color:red'>Your favorite color is red!</h4>";
    break;
  case "blue":
    echo "<h4 style='color:blue'>Your favorite color is blue!</h4>";
    break;
  case "green":
    echo "<h4 style='color:green'>Your favorite color is green!</h4>";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}