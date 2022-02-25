<?php
function random_username($string,$length=3){
    // $pattern = "e";
    // $firstPart = strstr(strtolower($string),$pattern,true);
    // $secondPart = substr(strstr(strtolower($string),$pattern, false), 0,3);
    $nrRand = rand(1000,10000);
    $username = substr(strtolower($string),0,$length).$nrRand;
    return $username;
  
    // $username = trim($firstPart).trim($secondPart).trim($nrRand);
    // return $username;
  }
  
  function random_password($length){
  $characters = '0123456789abcdefghijklmnopqrstuvwxyxABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $password = '';
  $characterListLength = mb_strlen($characters,'8bit') -1;
  foreach(range(1, $length) as $i){
    $password .= $characters[random_int(0,$characterListLength)];
    
  }
  return $password;
  }
?>