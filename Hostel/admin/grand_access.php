<?php
// session_start();
// if(!isset($_SESSION['alogin'])){
//     $susername = $_SESSION['username'];
    
// header('location:http://localhost:5050/new/student/pages/adminlog.php ');
// }else{

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grant Acces</title>
    <link rel="stylesheet" href="./css/w3.css">
    <script src="./js/jquery-3.5.1.min.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/jquery.min 1.12.4.js"></script>
    <script src="./js/grant_acces.js"></script>
    <script src="./js/verify.js"></script>
    <script>



    </script>
</head>
<body>
<?php 
include './includes/navbar.php';
?>
<div class="w3-container">
  
  <ul class="w3-ul w3-card-4" id="list">
   
  </ul>
</div>
<?php 
include './includes/footer.php';
?>
</body>
</html>
<?php
// }
 ?>