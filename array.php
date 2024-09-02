<?php
$cars = array("honda","hyundai","tata","maruthi","mahindra");

echo '<pre>';
print_r($cars);
echo '</pre>';


foreach($cars as $cm){
    echo strtoupper($cm).'<br>';
}

$myarray = array(123,["pen","pencil"],"car",$cars);
echo '<pre>';
print_r($myarray);
echo '</pre>';


echo count($myarray);