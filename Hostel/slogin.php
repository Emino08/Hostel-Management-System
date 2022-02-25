<?php
session_start();

// if(isset($_SESSION['login'])){
//    $susername = $_SESSION['username'];
//    echo 'session';
//    exit();
// }
 include './student/includes/config.php';
//  Data from registration for fees


 if(isset($_POST['susername']) && 
 isset($_POST['spassword'])){

    $susername = mysqli_real_escape_string($conn, htmlspecialchars($_POST['susername']));
 $spassword =mysqli_real_escape_string($conn, htmlspecialchars($_POST['spassword']));

//  echo $susername . $spassword;

if(strlen($susername)<5){
    echo 'uname';
    exit();
   }elseif (strlen($spassword)<6) {
     # code...
     echo 'pword';
     exit();
   }else{

   //  $password = password_hash($spassword,PASSWORD_BCRYPT,array('cost'=> 12));
$query = "SELECT * FROM login WHERE username = '$susername'";
$result = mysqli_query($conn,$query) or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if($num_row>0){
   if(password_verify($spassword,$row['password'])){
      $_SESSION['login'] = $row['ID'];
      $_SESSION['username'] = $row['username'];
      $_SESSION['email'] = $row['email'];
      
      echo 'true';
      exit();
   }else{
      echo 'false';
   }
}else{
   echo 'false';
}

   }

 }
    ?>



