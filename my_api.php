<?php


$value_x= $_GET["x"];
$value_y= $_GET["y"];

$value_exp= 2 * $value_x + $value_y % 2;
$array = ["value_x" => $value_x,
         "value_y" => $value_y,
         "value_exp" => $value_exp] ;

echo json_encode($array);
?>