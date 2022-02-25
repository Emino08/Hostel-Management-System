<?php
session_start();

// if(isset($_SESSION['login'])){
//    $susername = $_SESSION['username'];
//    echo 'session';
//    exit();
// }
 include './includes/config.php';
//  Data from registration for fees


 if(isset($_POST['ausername']) && 
 isset($_POST['apassword'])){

    $ausername = mysqli_real_escape_string($conn, htmlspecialchars($_POST['ausername']));
 $apassword =mysqli_real_escape_string($conn, htmlspecialchars($_POST['apassword']));

//  echo $susername . $spassword;

if(strlen($ausername)<5){
    echo 'uname';
    exit();
   }elseif (strlen($apassword)<6) {
     # code...
     echo 'pword';
     exit();
   }else{

   //  $password = password_hash($spassword,PASSWORD_BCRYPT,array('cost'=> 12));
$query = "SELECT * FROM admin WHERE username = '$ausername'";
$result = mysqli_query($conn,$query) or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if($num_row>0){
//    if(password_verify($apassword,$row['password'])){
    if($apassword == $row['password']){
      $_SESSION['alogin'] = $row['ID'];
      $_SESSION['username'] = $row['username'];
    //   $_SESSION['email'] = $row['email'];
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



