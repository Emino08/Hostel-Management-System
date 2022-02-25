<?php
include './includes/config.php';
// $sql = "INSERT INTO login (username, password, student_id)
// VALUES ('Emino08', 'eueejejjf', 46565)";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

// $conn->close();

// $to_email_address = "e34koroma@njala.edu.sl";
//   $subject = "Hotel Comfirmation";
//   $message = "Password and Username";
//   $headers ="From: noreply @ company . com";
//   $parameters="";

// //   ini_set("SMTP","ssl://smtp.gmail.com");
// // ini_set("smtp_port","587");
//   $retval = mail($to_email_address,$subject,$message,$headers);

//   if( $retval === true ) {
//     echo "Message sent successfully...";
//  }else {
//     echo "Message could not be sent...";
//  }
// exit();


$sql = "SELECT email, first_name FROM rfees_reg";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $name = '';
    $id = '';
    while($row = $result->fetch_assoc()) {
       
        $id = $row["email"];
        $name = $row["first_name"];
      //  echo "id: " . $row["student_id"]. " - Name: " . $row["first_name"]. " " ."<br>";

       echo '
       <li class="w3-display-container">'. $row["first_name"]. '  '.   $row["email"] . ' <span onclick="document.getElementById(\''.$id.'\').style.display=\'block\'" style="margin-left:430px;
    margin-bottom:10px" class="w3-button w3-teal ">Accept</span> <span onclick="this.parentElement.style.display=\'none\'" class="w3-button w3-red" style="margin-left:420px">Remove and Decline</span></li>

    <div id="'.$id.'" class="w3-modal">
    <div class="w3-modal-content">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById(\''.$id.'\').style.display=\'none\'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Grant Hostel Access to Hostel Form</h2>
      </header>
      <div class="w3-container w3-center">
        <p class="w3-button w3-orange" onclick="allow(this)"  id="accept'.$id.'">Grant Access</p>
        
      </div>
      <footer class="w3-container w3-teal">
        <p>ECEO</p>
      </footer>
    </div>
  </div>
       ';
      
    } exit();
  echo 'Deny';
  }
?>

