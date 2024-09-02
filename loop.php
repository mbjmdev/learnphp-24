<?php
/*
    while
    do...while
    for
    foreach   

    break
    continue
*/

//while


echo 'While Loop </br>';
$i = 1;
while ($i < 6) {
  echo $i.'<br/>';
  //if($i == 3) break;
  //if($i == 3) continue;
  $i++;
}
/*
$i = 1;
while ($i < 6):
  echo $i;
  $i++;
endwhile;
*/
//Do While

echo 'Do While Loop </br>';

$i = 1;
do {
  echo $i.'<br/>';
  $i++;
} while ($i < 6);

/*
for (expression1, expression2, expression3) {
  // code block
}
*/

$myname = "Saravana Sundharam";
$split = str_split($myname);

for ($x = 0; $x < strlen($myname); $x++) {
    echo '<hr>'.$split[$x].'</br>';
}
echo '<hr>';

/*
foreach 
*/

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "$x <br>";
}




