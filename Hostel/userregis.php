<?php
session_start();
if(isset($_SESSION['login'])){
    $susername = $_SESSION['username'];
    
header('location:./student/book_hostel.php');
 }

else{ 
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Fees Confirmation</title>
    <script src="./student/js/jquery-3.5.1.min.js"></script>
    <script src="./student/js/jquery.min 1.12.4.js"></script>
    <script src="./student/js/jquery.min.js"></script>
    <link rel="stylesheet" href="./student/css/w3.css">
    
<script type="text/javascript">
 $(document).ready(function(){
    // name = $("#notify").html('man')
    // alert(name)
    
  $("#submit").click(()=> {

  first_name =$("#firstname").val();
  middle_name = $("#middlename").val();
  last_name = $("#lastname").val();
  email = $("#email").val();
  courseform = $("#courseform").val();
  student_id = $("#student_id").val();
  receipt_no = $("#receipt_no").val();
  bank_slip_no = $("#invoice_no").val();
  program = $("#program").val();
  year = $("#year").val();
  date_of_payment = $("#date_of_payment").val();

// alert("You entered p1!");

$.post("./refer.php",
  {
    "firstname":first_name,"middlename":middle_name,"lastname":last_name,"email":email,"courseform":courseform,"student_id":student_id,"receipt_no":receipt_no,"invoice_no":bank_slip_no,"program":program,"year":year,"date_of_payment":date_of_payment
  },
  function(data,status){
    // alert("Data: " + data + "\nStatus: " + status);
    if(data == 'fname'){
        $("#dispay_success").html("<div class='w3-panel w3-red'>Invalid First Name</div>");
        $("#firstname").addClass("w3-border-red")
    }
    else if(data == 'lname'){
        $("#dispay_success").html("<div class='w3-panel w3-red'>Invalid Last Name</div>");
        $("#firstname").removeClass("w3-border-red")
        $("#lastname").addClass("w3-border-red")
    }
    else if(data == 'email'){
        $("#dispay_success").html("<div class='w3-panel w3-red'>Email Too short</div>");
        $("#lastname").removeClass("w3-border-red")
        $("#email").addClass("w3-border-red")
    }
    else if(data == 'femail'){
        $("#dispay_success").html("<div class='w3-panel w3-red'>Invalid Email</div>");
        $("#email").removeClass("w3-border-red")
        $("#email").addClass("w3-border-red")
    }
    else if(data == 'courseform'){
        $("#dispay_success").html("<div class='w3-panel w3-red'>Short Courseform Number</div>");
        $("#email").addClass("w3-border-red")
        $("#courseform").addClass("w3-border-red")
    }
    else if(data == 'studentid'){
        $("#dispay_success").html("<div class='w3-panel w3-red'>Student Id Too Short</div>");
        $("#courseform").removeClass("w3-border-red")
        $("#student_id").addClass("w3-border-red")
    }
    else if(data == 'receiptno'){
        $("#dispay_success").html("<div class='w3-panel w3-red'>Receipt Number Too short</div>");
        $("#student_id").removeClass("w3-border-red")
        $("#receipt_no").addClass("w3-border-red")
    }
    else if(data == 'invoiceno'){
        $("#dispay_success").html("<div class='w3-panel w3-red'>Invoice Number Too short</div>");
        $("#receipt_no").removeClass("w3-border-red")
        $("#invoice_no").addClass("w3-border-red")
    }
    else if(data == 'program'){
        $("#dispay_success").html("<div class='w3-panel w3-red'>Program name Too short</div>");
        $("#invoice_no").removeClass("w3-border-red")
        $("#program").addClass("w3-border-red")
    }
    else if(data == 'year'){
        $("#dispay_success").html("<div class='w3-panel w3-red'>Year name Too short</div>");
        $("#program").removeClass("w3-border-red")
        $("#year").addClass("w3-border-red")
    }

     $("#confirmation").text(data)
    // name = $("#notify").html("<div>Hello</div>");
//    alert(name)
    // if(data=="true"){
        // alert(data)
    // }
       
       
    });



//  $.ajax({
//      type:"POST",
//      url:"http://localhost:5050/new/refer.php",
//      data:"firstname":first_name,"middlename":middle_name,"lastname":last_name,"courseform":courseform,"student_id":student_id,"receipt_no":receipt_no,"invoice_no":bank_slip_no,"program":program,"year":year,"date_of_payment":date_of_payment,
//      success: function(result){
//     alert(result) });
  })

  
});
</script>
    
</head>
<body>
<?php include 'student/includes/snavbar.php'; ?>
<br>

<div id="confirmation" class="w3-center w3-deep-purple">

</div>

<div id="notify">
    
</div>
<div class="w3-card-4 w3-sand" style="
height: 36%;
width: 20%;  
margin: auto;
width: 50%;
border: 3px solid green;
padding: 10px;
margin-top: 120px;
margin-bottom: 100px;">


<p class="w3-center">Fees and Registration Verification</p>
 <div  id="dispay_success"></div>   
    
<form class="w3-container">
    <p>
    <input class="w3-input w3-border w3-round-xlarge" id="firstname" type="text" placeholder="First Name"></p>
    <p>

    <p>
    <input class="w3-input w3-border w3-round-xlarge" id="middlename" type="text" placeholder="Middlename"></p>
    <p>
    <p>
    <input class="w3-input w3-border w3-round-xlarge" id="lastname" type="text" placeholder="Lastname"></p>
    <p>
    
    <p>
    <input class="w3-input w3-border w3-round-xlarge" id="email" type="email" placeholder="Email"></p>
    <p>

    <p>
        <input class="w3-input w3-border w3-round-xlarge" id="courseform" type="text" placeholder="Course Form No"></p>
        
    <p>
        <input class="w3-input w3-border w3-round-xlarge" id="student_id" type="text" placeholder="Student ID"></p>
    
    <p>
        <input class="w3-input w3-border w3-round-xlarge" id="receipt_no" type="text" placeholder="Receipt No"></p>
    <p>
        <input class="w3-input w3-border w3-round-xlarge" id="invoice_no" type="text" placeholder="Bank Slip/Invoice No"></p>
    <p>
        <input class="w3-input w3-border w3-round-xlarge" id="program" type="text" placeholder="Program"></p>
    <p>
        <input class="w3-input w3-border w3-round-xlarge" id="year" type="text" placeholder="Year"></p>
    <p>
         <input class="w3-input w3-border w3-round-xlarge" id="date_of_payment" type="date" placeholder="Payment Date"></p>

        <p><button type="button" href="#dispay_success" class="w3-button w3-black w3-round-large" id="submit">Verify Fees Payment</button></p>
        
</form>
    </div>
    
    </div>
<?php include './student/includes/footer.php'; ?>
</body>
</html>

<?php 
}
?>