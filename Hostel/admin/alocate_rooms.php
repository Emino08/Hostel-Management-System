<?php
// include './includes/config.php';

// $sql = "SELECT * FROM rfees_reg WHERE student_id='32333'";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
//     // output data of each row
//     $name = '';
//     $id = '';
//     while($row = $result->fetch_assoc()) {
       
//         $id = $row["student_id"];
//         $name = $row["first_name"];
    
//     }
//   }else {
//     echo "0 results";
// }
// $generated_username = random_username($name);
// $generated_password = random_password(10);

// $sql = "INSERT INTO login (username, password, student_id)
// VALUES ('$generated_username', '$generated_password', '$id')";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();  

 


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
    <script src="./js/agrant_acces.js"></script>
    <script src="./js/averify.js"></script>

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