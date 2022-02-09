<?php


// function isPalindrome($str) 
// {
    $str = $_GET["str"];
    $value ="is palindrome";
    $array= ["string" => $str, "value" =>$value];
    if ($str == strrev($str)){
        echo json_encode($array);
    }

     else {
         $value= "is not a palindrome";
         $array= ["string" => $str, "value" =>$value];
        echo json_encode($array);
     }
    
    // }
  //  echo json_encode($array);
//    $str= $_GET["str"];
//   if ($str == strrev($str))
//       return $str. " is Palindrome ";
//   else
// 	  return $str. " is not Palindrome";
// }
// echo isPalindrome("madam")."\n";

?>