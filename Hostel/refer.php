<?php
 include './student/includes/config.php';
//  Data from registration for fees


 if(isset($_POST['firstname']) && 
 isset($_POST['middlename']) &&
 isset($_POST['lastname']) &&
 isset($_POST['email']) &&
 isset($_POST['courseform']) && isset($_POST['student_id']) && isset($_POST['receipt_no']) && isset($_POST['invoice_no']) && isset($_POST['program']) && isset($_POST['year']) && isset($_POST['date_of_payment'])){
// $first_name = my($_POST['firstname']);
//  $middle_name = $_POST['middlename'];
//  $last_name = $_POST['lastname'];
//  $courseform = $_POST['courseform'];
//  $student_id = $_POST['student_id'];
//  $receipt_no = $_POST['receipt_no'];
//  $bank_slip_no = $_POST['invoice_no'];
//  $program = $_POST['program'];
//  $year = $_POST['year'];
//  $date_of_payment = $_POST['date_of_payment'];
$first_name = mysqli_real_escape_string($conn, htmlspecialchars($_POST['firstname']));
 $middle_name =mysqli_real_escape_string($conn, htmlspecialchars($_POST['middlename']));
 $last_name =mysqli_real_escape_string($conn, htmlspecialchars($_POST['lastname']));
 $email =mysqli_real_escape_string($conn, htmlspecialchars($_POST['email']));
 $courseform =mysqli_real_escape_string($conn, htmlspecialchars($_POST['courseform']));
 $student_id =mysqli_real_escape_string($conn, htmlspecialchars($_POST['student_id']));
 $receipt_no =mysqli_real_escape_string($conn, htmlspecialchars($_POST['receipt_no']));
 $bank_slip_no =mysqli_real_escape_string($conn, htmlspecialchars($_POST['invoice_no']));
 $program =mysqli_real_escape_string($conn, htmlspecialchars($_POST['program']));
 $year =mysqli_real_escape_string($conn,htmlspecialchars($_POST['year']));
 $date_of_payment =mysqli_real_escape_string($conn, htmlspecialchars($_POST['date_of_payment']));

 if(strlen($first_name)<2){
  echo 'fname';
  exit();
 }elseif (strlen($last_name)<2) {
   # code...
   echo 'lname';
   exit();
 }elseif (strlen($email)<4) {
   # code...
   echo 'email';
   exit();
 }elseif (filter_var($email,FILTER_VALIDATE_EMAIL)===false) {
   # code...
   echo 'femail';
   exit();
 }elseif (strlen($courseform)<6) {
   # code...
   echo 'courseform';
   exit();
 }elseif (strlen($student_id)<4) {
   # code...
   echo 'studentid';
   exit();
 }elseif (strlen($receipt_no)<8) {
   # code...
   echo 'receiptno';
   exit();
 }elseif (strlen($bank_slip_no)<7) {
  # code...
  echo 'invoiceno';
  exit();
}elseif (strlen($program)<7) {
   # code...
   echo 'program';
   exit();
 }elseif (strlen($year)>1) {
   # code...
   echo 'year';
   exit();
 }else{
//  $result = $conn->prepare("INSERT INTO rfees_reg (full_name,
//  course_form_no,
//  student_id,
//  receipt_no,
//  bank_slip_no,
//  program,
//  year,
//  payment_date)
//  VALUES (?,?,?,?,?,?,?,?)");

// $stmt = $mysqli->prepare($result);
// $stmt->bind_param('siiiisid', $fullname,
// $courseform,
// $student_id,
// $receipt_no,
// $bank_slip_no,
// $program,
// $year,
// $date_of_payment);
// $stmt->execute();

// echo "New records created successfully";

// $sql1 = "SELECT course_form_no FROM rfees_reg WHERE course_form_no='$courseform'";
// $result = $conn->query($sql1);

$result ="SELECT count(*) FROM rfees_reg WHERE course_form_no=?";
		$stmt = $conn->prepare($result);
		$stmt->bind_param('i',$courseform);
		$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
{
echo"<script>alert('Course form number already registered.');</script>";
}else{


 $sql = "INSERT INTO rfees_reg (first_name,
 middle_name,
 last_name,
 email,
 course_form_no,
 student_id,
 receipt_no,
 bank_slip_no,
 program,
 year,
 payment_date)
VALUES(
'$first_name',
'$middle_name',
'$last_name',
'$email',
'$courseform',
'$student_id',
'$receipt_no',
'$bank_slip_no',
'$program',
'$year',
'$date_of_payment')";

// $sql = "INSERT INTO fun (name) VALUES('Emmanuel')";

if ($conn->query($sql) === TRUE) {
  echo "Thank You for your registration "."<br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




$conn->close();

//  echo $fullname . ' ' .$courseform. ' ' .$student_id . ' ' .$receipt_no. ' ' .$bank_slip_no . ' ' .$program. ' ' .$year . ' ' .$date_of_payment;
 } }     }
// $arrayName = array(
//     $fullname =>$fullname ,$courseform =>$courseform,$student_id =>$student_id,
//     $receipt_no,$bank_slip_no,$program,$year,$date_of_payment
//   );

//   $arr = json_encode($arrayName);
//   echo $arr;

 echo ' You will received a mail shortly';
 



 
 ?>

