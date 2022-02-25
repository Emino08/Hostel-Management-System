<?php
session_start();
if(!isset($_SESSION['login'])){
    $susername = $_SESSION['username'];
    
header('location:../Index.php');
 }

else{ 
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>other</title>
    <link rel="stylesheet" href="./css/w3.css">
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/jquery.min 1.12.4.js"></script>
    <script src="./js/jquery.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
            // alert(5)     


        $.post("./printout.php",
  function(data,status){
      newData = JSON.parse(data);
    // alert((newData["fname"]));  
  first_name =$("#fname").text(newData.fname);
  middle_name = $("#mname").text(newData.mname);
  last_name = $("#name").text(newData.lname);
  hostel = $("#hostel").text(newData.hostel);
  hostel_room_no = $("#hostel_room_no").text(newData.hostel_no);
  student_id = $("#student_id").text(newData.student_id);
  email = $("#email").text(newData.email);
  hfees_receipt_no = $("#hfees_receipt_no").text(newData.hostel_receipt_no);
  program = $("#program").text(newData.program);
  year = $("#year").text(newData.year);
  sex = $("#sex").text(newData.sex);
  school = $("#school").text(newData.school);
  padd = $("#padd").text(newData.p_address);
//   nok_name = $("#nok_name").text(newData.mname);
  nok_address = $("#nok_address").text(newData.nok_address);
  nok_phone_no = $("#nok_phone_no").text(newData.nok_phone_no);

  })

       });
    </script>
</head>
<body>
<?php include './includes/navbar.php'; ?>

    <div class="w3-container">
    <h1 class="w3-center">Hostel Detail</h1>

  <table class="w3-table w3-striped">
    <tr>
      <th>
      <p>First Name: <span id="fname"></span></p>
      </th>

      <th>
      <p>Middlename: <span id="mname"></span></p>
      </th>
      <th>
      <p>Last Name: <span id="lname"></span></p>
      </th>
    </tr>

    <tr>
      <th>
      <p>Hostel: <span id="hostel"></span></p>
      </th>

      <th>
      <p>Hostel Room no: <span id="hostel_room_no"></span></p>
      </th>
      <th>
      <p>Student Id: <span id="student_id"></span></p>
      </th>
    </tr>
    <tr>
      <th>
      <p>Student Phone No: <span id="sphone_no"></span></p>
      </th>

      <th>
      <p>Email: <span id="email"></span></p>
      </th>
      <th>
      <p>Student fees Receipt No: <span id="sfees_receipt_no"></span></p>
      </th>
    </tr>
    <tr>
      <th>
      <p>Hostel Receipt No: <span id="hfees_receipt_no"></span></p>
      </th>

      <th>
      <p>Program: <span id="program"></span></p>
      </th>
      <th>
      <p>Year: <span id="year"></span></p>
      </th>
    </tr>
    <tr>
      <th>
      <p>Sex: <span id="sex"></span></p>
      </th>

      <th>
      <p>School: <span id="school"></span></p>
      </th>
      <th>
      <p>Permanent Address: <span id="padd"></span></p>
      </th>
    </tr>

    <tr>
      <th>
      <p>Next of King Name: <span id="nok_name"></span></p>
      </th>

      <th>
      <p>Next of King Address: <span id="nok_address"></span></p>
      </th>
      <th>
      <p>Next of King Phone Number: <span id="nok_no"></span></p>
      </th>
    </tr>
  </table>
</div>

<?php include './includes/footer.php'; ?>
</body>
</html>
<?php 
}
?>