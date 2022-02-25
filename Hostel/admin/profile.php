<?php 
// session_start();
// if(!isset($_SESSION['login'])){
//     $susername = $_SESSION['username'];
//     $email = $_SESSION['email'];
    
// header('location:http://localhost:5050/new/index.php ');
// }else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>
    <link rel="stylesheet" href="./css/w3.css">
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/jquery.min 1.12.4.js"></script>
    <script src="./js/jquery.min.js"></script>

    <script type="text/javascript">
    $(document).ready(function(){
        
        $("#submit").click(()=>{
            // alert(5)
            oldpassword =$("#cpassword").val();
            npassword = $("#npassword").val();
            cnpassword = $("#cnpassword").val();


        $.post("./achange_password.php",
  {
    "cpassword":oldpassword,"npassword":npassword,"cnpassword":cnpassword
  },
  function(data,status){
    alert(data);  
    if(data == 'Password are not equal'){
        $("#dispay_success").html("<div class='w3-panel w3-red'>Password Don't match</div>");
        $("#npassword").addClass("w3-border-red")
        $("#cnpassword").addClass("w3-border-red")
    }else if(data == 'Password Too short'){
        $("#dispay_success").html("<div class='w3-panel w3-red'>Password too Short</div>");
        $("#npassword").addClass("w3-border-red")
        $("#cnpassword").addClass("w3-border-red")
    }
  })

        })
       });
    </script>
</head>
<body>
<?php include './includes/navbar.php'; ?>
<br>

<div class="w3-card-4 w3-sand" style="
    height: 36%;
    width: 20%;  
    margin: auto;
    width: 50%;
    border: 3px solid green;
    padding: 10px;
    margin-top: 120px;
    margin-bottom: 100px;">

<p class="w3-center">Change Password</p>
<div  id="dispay_success"></div>         
        
<form class="w3-container">
    <p>
    <input class="w3-input w3-border w3-round-xlarge" id="cpassword" type="text" placeholder="Current Password"></p>
    <p>
        <p>
            <input class="w3-input w3-border w3-round-xlarge" id="npassword" type="password" placeholder="New Password"></p>

            <p>
            <input class="w3-input w3-border w3-round-xlarge" id="cnpassword" type="password" placeholder="Confirm New Password"></p>
    
            <p><button id="submit" type="button" class="w3-button w3-black w3-round-large">Change Password</button></p>
            
  </form>
        </div>
        
        </div>


<?php include './includes/footer.php'; ?>    
</body>
</html>
<?php 
// else{ 
//     header('location:http://localhost:5050/new/student/book_hostel.php ');
// }
?>