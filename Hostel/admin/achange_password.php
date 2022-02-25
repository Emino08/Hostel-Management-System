<?php
// session_start();
// if(isset($_SESSION['login'])){
//     $susername = $_SESSION['username'];
//     $email = $_SESSION['email'];
include './includes/config.php';
include './includes/functions.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "koromaemmanuel66@gmail.com";
$mail->Password   = "jjfjxbnjagnqazsz";

include './includes/config.php';
$oldpassword = $_POST['cpassword'];
$npassword = $_POST['npassword'];
$cnpassword = $_POST['cnpassword'];

  
// Use strcmp() function  
if (strcmp($npassword, $cnpassword) !== 0) { 
    echo 'Password are not equal'; 
    exit();
} 
else { 
    if(strlen($npassword)<6){
        echo 'Password Too short';
        exit();
    }

  echo($oldpassword . " " . $npassword. " ". $cnpassword);
    $newpassword=password_hash($npassword,PASSWORD_BCRYPT, array('cost' => 12));
  
// $query = "UPDATE login SET password='.$newpassword.' WHERE email='$email'";
$query = "SELECT * FROM admin WHERE username = 'emino08'";
$result = mysqli_query($conn,$query) or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
echo $row['password'];

if($num_row>0){

    if(password_verify($oldpassword,$row['password'])){
        echo "hey";
    $query1 = "UPDATE admin SET password='$newpassword' WHERE username='emino08'";
    mysqli_query($conn,$query1) or die(mysqli_error());
    echo "Password updated successfully";

    $mail->IsHTML(true);
$mail->AddAddress($email, $susername);
$mail->SetFrom("embeddedcomputerexperts.org@gmail.com", "Embedded Computer Experts' Organization");
// $mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
// $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
$mail->Subject = "Njala Hostel Management System";
$content = "<b>Username: ".$generated_username."  <br> Your New Password is : ".$npassword."</b>";
$mail->SMTPDebug=0;

$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
//   var_dump($mail);
} else {
  echo "Email sent successfully";
}
    exit();
} else {
    echo "Error updating record: " . $conn->error;
// Sending New Password mail
//   $to_email_address = $email;
//   $subject = "Njala University Hostel Details";
//   $message = "Usernane ". $generated_username. "Your New Password is: ".$npassword;
//   $headers ="From: embeddedcomputerexperts.org@gmail. com";
// //   $parameters="";

//   $retval = mail($to_email_address,$subject,$message,$headers);

//   if( $retval === true ) {
//     echo "Message sent successfully...";
//  }else {
//     echo "Message could not be sent...";
//  }
exit();
$conn->close();
}

$conn->close();
}
}
// }
?>