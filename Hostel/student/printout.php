<?php 
session_start();
include './includes/config.php';
if(isset($_SESSION['login'])){
    $susername = $_SESSION['username'];
    $email = $_SESSION['email'];
    
$sql = "SELECT * FROM fees_reg WHERE email= '$email'";
$result = mysqli_query($conn,$sql) or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

if($num_row>0){

    $print_details = array("fname"=>$row['f_name'], "mname"=>$row['m_name'], "lname"=>$row['l_name'],
    "hostel"=>$row['block'], "hostel_no"=>$row['room_No'], "student_id"=>$row['student_id'],
     "email"=>$row['email'], "hostel_receipt_no"=>$row['fees'], "program"=>$row['program'], "year"=>$row['year'], "sex"=>$row['gender'], "school"=>$row['school'], "p_address"=>$row['permanent_add'], "nok_address"=>$row['p_address'], "nok_phone_no"=>$row['p_contact']);
    // , "sfees_receipt_no"=>$row[''],"sphone_no"=>$row[''],"nok_name"=>$row[''],
    echo json_encode($print_details);
}

// }else{

// echo header('location:http://localhost:5050/new/index.php ');
}
?>