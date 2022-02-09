<?php

      $password =$_GET["password"];
     $alpha_upper= preg_match('@[A-Z]@', $password);
     $alpha_lower = preg_match('@[a-z]@', $password);
     $numbers    = preg_match('@[0-9]@', $password);


     if( strlen($password)> 8 && ($alpha_lower || $alpha_upper) && $numbers ){
      $passwordarray =[$password];
      $hash= password_hash("SHA256", PASSWORD_BCRYPT, $passwordarray);
      $array= ["password" => $password, "validation" => "is valid","cost" => 8, "hashed_password" => $hash];
       echo json_encode($array);
     }
     else {
        $passwordarray =[$password];
       
        $hash= password_hash("SHA256", PASSWORD_BCRYPT, $passwordarray);
        $array= ["password" => $password, "validation" => "is not valid","cost" => 8, "hashed_password" => $hash];
        echo json_encode($array);
        // echo "not valid password";
     }

  
 
?>
