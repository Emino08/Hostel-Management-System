<?php
include './includes/config.php';
// include './functions.php';
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

$email = $_POST['email'];

// echo random_username("Mambu");
// echo random_password(8);
// echo $email;

$sql = "SELECT * FROM fees_reg WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $room_no = '';
    $id = '';
    $email = '';
    $block = '';
    $fees = '';
    while($row = $result->fetch_assoc()) {
       
        $id = $row["student_id"];
        $email = $row["email"];
        $room_no = $row["room_No"];
        $block = $row["block"];
        $fees = $row["fees"];
        $name = $row["f_name"];
  
    }

// $generated_username = random_username($name);
// $tmp_password = random_password(10);
// echo $tmp_password;
// $generated_password = password_hash($tmp_password,PASSWORD_BCRYPT, array('cost' => 12));

$sql1 = "SELECT * FROM rooms WHERE room_no = '$room_no' AND block = '$block'";
$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
  echo "Room Already Allocated";
}else{
  $sql2 = "INSERT INTO rooms (student_id, block, room_no,fees,email)
VALUES ('$id', '$block', '$room_no','$fees','$email')";

if ($conn->query($sql2) === TRUE) {
    // echo "New record created successfully";
    echo "Thank You <br>";
    
$mail->IsHTML(true);
$mail->AddAddress($email, $name);
$mail->SetFrom("embeddedcomputerexperts.org@gmail.com", "Embedded Computer Experts' Organization");
// $mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
// $mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
$mail->Subject = "Njala Hostel Management System";
$content = "<b>Hostel: ".$block."  <br>  Room No: ".$room_no."</b>";
$mail->SMTPDebug=0;

$mail->MsgHTML($content); 
if(!$mail->Send()) {
  echo "Error while sending Email.";
//   var_dump($mail);
} else {
  echo "Email sent successfully";
}
exit();
$conn->close();
} else {
    echo "Error: " . $sql2 . "<br>" . $conn->error;
}

// $to_email_address = $email;
//   $subject = "Njala University Hostel Details";
//   $message = "Hostel ". $block. " Room No ".$room_no;
//   $headers ="From: embeddedcomputerexperts.org@gmail. com";
// //   $parameters="";

//   $retval = mail($to_email_address,$subject,$message,$headers);

//   if( $retval === true ) {
//     echo "Message sent successfully...";
//  }else {
//     echo "Message could not be sent...";
//  }



}

  
  }else {
    echo "0 results";
}
?>