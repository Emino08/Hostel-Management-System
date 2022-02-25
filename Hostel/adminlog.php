<?php
// session_start();
// if(isset($_SESSION['alogin'])){
//     $susername = $_SESSION['username'];
//     // $email =    $_SESSION['email'];
    
// header('http://localhost:5050/new/admin/pages/grand_access.php');
//  }

// else{ 
//     ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="./student/css/w3.css">
    <script src="./student/js/jquery-3.5.1.min.js"></script>
    <script src="./student/js/jquery.min 1.12.4.js"></script>
    <script src="./studentjs/jquery.min.js"></script>
    
    <script type="text/javascript">
    $(document).ready(function(){
        $("#submit").click(()=>{
            ausername =$("#ausername").val();
            apassword = $("#apassword").val();


            $.post("./admin/alogin.php",
  {
    "ausername":ausername,"apassword":apassword
  },
  function(data,status){
    
    if(data == 'uname'){
        $("#dispay_success").html("<div class='w3-panel w3-red'>Invalid Username</div>");
        $("#ausername").addClass("w3-border-red")
    }else if(data == 'pword'){
        $("#dispay_success").html("<div class='w3-panel w3-red'>Invalid Password</div>");
        $("#ausername").removeClass("w3-border-red")
        $("#apassword").addClass("w3-border-red")
    }else if(data === 'true'){
        alert("You are log in.....")
        window.location.href = "./admin/grand_access.php"
    }
    // else if (data == 'session'){
    //     window.location.href = "http://localhost:5050/new/student/book_hostel.php"
    // }

// alert(data)
  })
        })
        
        
        // alert(5)
 
});
    </script>
</head>
<body>
<?php include './student/includes/snavbar.php'; ?>
<br>

<div class="w3-center w3-deep-purple">

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

<p class="w3-center">Admin Login</p>
<div  id="dispay_success"></div>        
        
<form class="w3-container">
    <p>
    <input class="w3-input w3-border w3-round-xlarge" id="ausername" type="text" placeholder="Username"></p>
    <p>
        <p>
            <input class="w3-input w3-border w3-round-xlarge" id="apassword" type="password" placeholder="Password"></p>
            <p>
                <input class="w3-check" name="remember_me" type="checkbox" checked="checked">
                <label>Remember me</label>&#8287;&#8287;&#8287; 
                <a href="">Forgot Password?</a></p>
            <p><button type="button" id="submit" class="w3-button w3-black w3-round-large">Login</button></p>
           
  </form>
        
        </div>
    </div>
    
    </div>
<?php include './student/includes/footer.php'; ?>
</body>
</html>
<?php 
// }
?>
