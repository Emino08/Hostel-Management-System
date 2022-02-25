<?php 
include './includes/config.php';

if(isset($_POST['submit']))
{
$room_no = $_POST['room_no'];
$block = $_POST['block'];
$student_id = $_POST['student_id'];
$email = $_POST['email'];
$fees = $_POST['fees'];
$year = $_POST['year'];
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$date = $_POST['date'];
$program = $_POST['program'];
$school = $_POST['school'];
$department = $_POST['department'];
$parent_address = $_POST['parent_add'];
$parent_contact = $_POST['parent_con'];
$address = $_POST['address'];
$city = $_POST['city'];
$district = $_POST['district'];
$region = $_POST['region'];
$country = $_POST['country'];
$permanent_address = $_POST['p_address'];
$permanent_city = $_POST['p_city'];
$permanent_district = $_POST['p_district'];
$permanent_region = $_POST['p_region'];
$p_country = $_POST['p_country'];

// echo $room_no . $block. $student_id.$email.$fees. $year. $first_name. $middle_name. $last_name.$gender .$date. $program. $school. $department. $parent_address.$parent_contact.$address.$city.$district.$region.$country.$permanent_address.$permanent_city.$permanent_district.$permanent_region.$p_country;


$result ="SELECT count(*) FROM fees_reg WHERE email=?";
$stmt = $conn->prepare($result);
$stmt->bind_param('s',$email);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
if($count>0)
{
    echo"<script>alert('Registration number already registered.');</script>";
    // header('location:./book_hostel.php');
}else{

    $query="INSERT INTO  fees_reg(room_No , block, student_id,email,fees, year, f_name, m_name, l_name,gender ,dob, program, school, department, p_address,p_contact,p_street_address,p_city,p_district,p_region,p_country,permanent_add,permanent_city,permanent_district,permanent_region,permanent_country)VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";


// if($query = $conn->prepare($query)){
$stmt = $conn->prepare($query);
$rc=$stmt->bind_param('isisiissssdsssssssssssssss',$room_no,$block, $student_id,$email,$fees,$year,$first_name, $middle_name,$last_name,$gender ,$date,$program,$school,$department,$parent_address,$parent_contact,$address,$city,$district,$region,$country,$permanent_address,$permanent_city,$permanent_district,$permanent_region,$p_country);
$stmt->execute();
$stmt->close();
// }

$query1="INSERT INTO  rooms(student_id,block,room_no,fees,email)VALUES(?,?,?,?,?)";
$stmt1= $conn->prepare($query1);
$stmt1->bind_param('isiis',$student_id,$block,$room_no,$fees,$email);
$stmt1->execute();
echo"<script>alert('Student Succssfully register');</script>";

}
}else{
  echo 'error';  
}



?>