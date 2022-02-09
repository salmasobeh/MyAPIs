<?php

// function removeSpace($str){
$str= $_GET["string"];
$new_str=preg_replace('/\s+/', ' ', $str); 
$array=["string" => $str, "new_string" => $new_str];
echo json_encode($array);
// return preg_replace('/\s+/', ' ', $str);
// }

// echo  removeSpace("HELLO IAM AAA   OE SW  WFAF ");
?>