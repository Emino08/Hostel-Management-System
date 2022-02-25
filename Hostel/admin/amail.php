<?php
include './includes/config.php';

$sql = "SELECT * FROM fees_reg";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $name = '';
    $id = '';
    while($row = $result->fetch_assoc()) {
       
        $id = $row["email"];
        $name = $row["f_name"];
      //  echo "id: " . $row["student_id"]. " - Name: " . $row["first_name"]. " " ."<br>";

       echo '
       <li class="w3-display-container">'. $row["f_name"]. '  '.   $row["email"] . ' <span onclick="document.getElementById(\''.$id.'\').style.display=\'block\'" style="margin-left:430px;
    margin-bottom:10px" class="w3-button w3-teal ">Accept</span> <span onclick="this.parentElement.style.display=\'none\'" class="w3-button w3-red" style="margin-left:420px">Remove and Decline</span></li>

    <div id="'.$id.'" class="w3-modal">
    <div class="w3-modal-content">
      <header class="w3-container w3-teal"> 
        <span onclick="document.getElementById(\''.$id.'\').style.display=\'none\'" 
        class="w3-button w3-display-topright">&times;</span>
        <h2>Grant Hostel Access to Hostel Form</h2>
      </header>
      <div class="w3-container w3-center">
      <p>Program: ' .$row['program'].'</p>
      <p> Year: '.$row['year'].'</p>
      <p>Gender: '.$row['gender'].'</p>
      <p>Room No: '.$row['room_No'].'</p>
        <p class="w3-button w3-orange" onclick="allow(this)"  id="accept'.$id.'">Allocate Room</p>
        
      </div>
      <footer class="w3-container w3-teal">
        <p>Modal Footer</p>
      </footer>
    </div>
  </div>
       ';
      
    } exit();
  echo 'Deny';
  }
?>

