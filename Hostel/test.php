<?php
// session_start();
// $_SESSION['login'] = "Emmanuel";
// $_SESSION['username'] = "emm5018";
// $_SESSION['email'] = "e34koroma@njala.edu.sl";
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

$email = "e34koroma@njala.edu.sl";

$mail->IsHTML(true);
$mail->AddAddress($email, "Emmanuel Korma'");
$mail->SetFrom("embeddedcomputerexperts.org@gmail.com", "Embedded");
// $mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
// $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
$mail->Subject = "Njala Hostel Management System";
$content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";
$mail->SMTPDebug=0;
$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
//   var_dump($mail);
} else {
  echo "Email sent successfully";
}
?>