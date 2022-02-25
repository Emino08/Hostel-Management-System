<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>
    <link rel="stylesheet" href="./css/w3.css">
    
</head>
<body>
<?php include './includes/navbar.php'; ?>
<br>

<div class="w3-center w3-deep-purple">

    </div>
    <div class="w3-card-4 w3-sand" style="
    height: 36%;
    width: 60%;  
    margin: auto;
    width: 50%;
    border: 3px solid green;
    padding: 10px;
    margin-top: 120px;
    margin-bottom: 100px;">

<p class="w3-center">Fees and Registration Verification</p>
        
<?php 
session_start();

if(isset($_SESSION['login'])){
    $susername = $_SESSION['username'];
    $email = $_SESSION['email'];
?>
<?php


include './includes/config.php';

// $result ="SELECT count(*) FROM fees_reg";
// $stmt = $conn->prepare($result);
// $stmt->execute();
// $stmt->bind_result($count);
// $stmt->fetch();
// $stmt->close();
// if($count>0)
// {

$sql = "SELECT * FROM fees_reg WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

       echo ' <form class="w3-container" method="POST" action="./hostel_booked_page.php">
    
    <div class="w3-row">
        <div class="w3-half">
            <p>
                <input class="w3-input w3-border w3-round-xlarge" name="room_no" value="'. $row["room_No"].'" type="text" placeholder="Room No"></p>
        </div>
        <div class="w3-half">
            <p>
                <input class="w3-input w3-border w3-round-xlarge" name="block" type="text" value="'. $row["block"].'" placeholder="Block"></p>
        </div>
      </div>

      <div class="w3-row">
        <div class="w3-half">
            <p>
                <input class="w3-input w3-border w3-round-xlarge" name="student_id" type="text"value="'. $row["student_id"].'" placeholder="Student ID"></p>
        </div>
        <div class="w3-half">
        <p>
            <input class="w3-input w3-border w3-round-xlarge" name="email" type="text"value="'. $row["email"].'" placeholder="Email"></p>
    </div>

        </div>
        <div class="w3-row">
        <div class="w3-half">
            <p>
                <input class="w3-input w3-border w3-round-xlarge" name="fees" type="text" value="'. $row["fees"].'" placeholder="Fees"></p>
        </div>

        <div class="w3-half">
            <p>
                <input class="w3-input w3-border w3-round-xlarge" name="year" type="text"value="'. $row["year"].'" placeholder="Year"></p>
        </div>
      </div>

        <p>
            <input class="w3-input w3-border w3-round-xlarge" name="first_name" type="text"value="'. $row["f_name"].'" placeholder="First Name"></p>
            
        <p>
            <input class="w3-input w3-border w3-round-xlarge" name="middle_name" type="text"value="'. $row["m_name"].'" placeholder="Middle Name"></p>
        
        <p>
            <input class="w3-input w3-border w3-round-xlarge" name="last_name" type="text"value="'. $row["l_name"].'" placeholder="Last Name"></p>

            <div class="w3-row">
                <div class="w3-half">
                    <p>
                        <input class="w3-input w3-border w3-round-xlarge" name="gender"value="'. $row["gender"].'" type="text" placeholder="Gender"></p>
                </div>
                <div class="w3-half">
                    <p>
                        <input class="w3-input w3-border w3-round-xlarge" name="date"value="'. $row["dob"].'" type="date" placeholder="Date of Birth"></p>
                </div>
              </div>

        <p>
            <input class="w3-input w3-border w3-round-xlarge" name="program" type="text"value="'. $row["program"].'" placeholder="Program"></p>
        <p>
            <input class="w3-input w3-border w3-round-xlarge" name="school" type="text"value="'. $row["school"].'" placeholder="School"></p>
        <p>
            <input class="w3-input w3-border w3-round-xlarge" name="department" type="text"value="'. $row["department"].'" placeholder="Department"></p>
        <p>
             <input class="w3-input w3-border w3-round-xlarge" name="parent_add" type="text"value="'. $row["p_address"].'" placeholder="Parent/Guardian Address"></p>

             <p>
                <input class="w3-input w3-border w3-round-xlarge" name="parent_con" type="text"value="'. $row["p_contact"].'" placeholder="Guardian Contact"></p>
            <p>
                 <input class="w3-input w3-border w3-round-xlarge" name="address" type="text"value="'. $row["p_street_address"].'" placeholder="Student Address"></p>

                 <div style="width:100%; background-color: black;height: 2px;"></div>

            <p>
                <input class="w3-input w3-border w3-round-xlarge" name="city" type="text"value="'. $row["p_city"].'" placeholder="City/Town"></p> 
                
                <div class="w3-row">
                    <div class="w3-half">
                        <p>
                            <input class="w3-input w3-border w3-round-xlarge"value="'. $row["p_district"].'" name="district" type="text" placeholder="District"></p>
                    </div>
                    <div class="w3-half">
                        <p>
                            <input class="w3-input w3-border w3-round-xlarge"value="'. $row["p_region"].'" name="region" type="text" placeholder="Region"></p>
                    </div>
                  </div>

                  <p>
                    <input class="w3-input w3-border w3-round-xlarge" name="country" type="text"value="'. $row["p_country"].'" placeholder="Country"></p> 
                <p>
                    <input class="w3-input w3-border w3-round-xlarge" name="p_address" type="text"value="'. $row["permanent_add"].'" placeholder="Permanent Address"></p> 

                <p>
                    <input class="w3-input w3-border w3-round-xlarge" name="p_city" type="text"value="'. $row["permanent_city"].'" placeholder="Permanet City/Town"></p> 
                    <div class="w3-row">
                        <div class="w3-half">
                            <p>
                                <input class="w3-input w3-border w3-round-xlarge"value="'. $row["permanent_district"].'" name="p_district" type="text" placeholder="Permanent District"></p>
                        </div>
                        <div class="w3-half">
                            <p>
                                <input class="w3-input w3-border w3-round-xlarge"value="'. $row["permanent_region"].'" name="p_region" type="text" placeholder="Permanent Region"></p>
                        </div>
                      </div>
            <p>
                <input class="w3-input w3-border w3-round-xlarge" name="p_country" type="text"value="'. $row["permanent_country"].'" placeholder="Permanet Country"></p> 

            <p><button name="submit" class="w3-button w3-black w3-round-large">Register</button></p>
            
  </form>';
    // }

}
    
}else{
echo '<form class="w3-container" method="POST" action="./hostel_booked_page.php">
    
    <div class="w3-row">
        <div class="w3-half">
            <p>
                <input class="w3-input w3-border w3-round-xlarge" name="room_no" type="text" placeholder="Room No"></p>
        </div>
        <div class="w3-half">
            <p>
                <input class="w3-input w3-border w3-round-xlarge" name="block" type="text" placeholder="Block"></p>
        </div>
      </div>

      <div class="w3-row">
        <div class="w3-half">
            <p>
                <input class="w3-input w3-border w3-round-xlarge" name="student_id" type="text" placeholder="Student ID"></p>
        </div>

        <div class="w3-half">
        <p>
            <input class="w3-input w3-border w3-round-xlarge" name="email" type="text"value="'. $row["email"].'" placeholder="Email"></p>
    </div>

        </div>

        <div class="w3-row">
        <div class="w3-half">
            <p>
                <input class="w3-input w3-border w3-round-xlarge" name="fees" type="text" placeholder="Fees"></p>
        </div>

        <div class="w3-half">
            <p>
                <input class="w3-input w3-border w3-round-xlarge" name="year" type="text" placeholder="Year"></p>
        </div>
      </div>

        <p>
            <input class="w3-input w3-border w3-round-xlarge" name="first_name" type="text" placeholder="First Name"></p>
            
        <p>
            <input class="w3-input w3-border w3-round-xlarge" name="middle_name" type="text" placeholder="Middle Name"></p>
        
        <p>
            <input class="w3-input w3-border w3-round-xlarge" name="last_name" type="text" placeholder="Last Name"></p>

            <div class="w3-row">
                <div class="w3-half">
                    <p>
                        <input class="w3-input w3-border w3-round-xlarge" name="gender" type="text" placeholder="Gender"></p>
                </div>
                <div class="w3-half">
                    <p>
                        <input class="w3-input w3-border w3-round-xlarge" name="date" type="date" placeholder="Date of Birth"></p>
                </div>
              </div>

        <p>
            <input class="w3-input w3-border w3-round-xlarge" name="program" type="text" placeholder="Program"></p>
        <p>
            <input class="w3-input w3-border w3-round-xlarge" name="school" type="text" placeholder="School"></p>
        <p>
            <input class="w3-input w3-border w3-round-xlarge" name="department" type="text" placeholder="Department"></p>
        <p>
             <input class="w3-input w3-border w3-round-xlarge" name="parent_add" type="text" placeholder="Parent/Guardian Address"></p>

             <p>
                <input class="w3-input w3-border w3-round-xlarge" name="parent_con" type="text" placeholder="Guardian Contact"></p>
            <p>
                 <input class="w3-input w3-border w3-round-xlarge" name="address" type="text" placeholder="Student Address"></p>

                 <div style="width:100%; background-color: black;height: 2px;"></div>

            <p>
                <input class="w3-input w3-border w3-round-xlarge" name="city" type="text" placeholder="City/Town"></p> 
                
                <div class="w3-row">
                    <div class="w3-half">
                        <p>
                            <input class="w3-input w3-border w3-round-xlarge" name="district" type="text" placeholder="District"></p>
                    </div>
                    <div class="w3-half">
                        <p>
                            <input class="w3-input w3-border w3-round-xlarge" name="region" type="text" placeholder="Region"></p>
                    </div>
                  </div>

                  <p>
                    <input class="w3-input w3-border w3-round-xlarge" name="country" type="text" placeholder="Country"></p> 
                <p>
                    <input class="w3-input w3-border w3-round-xlarge" name="p_address" type="text" placeholder="Permanent Address"></p> 

                <p>
                    <input class="w3-input w3-border w3-round-xlarge" name="p_city" type="text" placeholder="Permanet City/Town"></p> 
                    <div class="w3-row">
                        <div class="w3-half">
                            <p>
                                <input class="w3-input w3-border w3-round-xlarge" name="p_district" type="text" placeholder="Permanent District"></p>
                        </div>
                        <div class="w3-half">
                            <p>
                                <input class="w3-input w3-border w3-round-xlarge" name="p_region" type="text" placeholder="Permanent Region"></p>
                        </div>
                      </div>
            <p>
                <input class="w3-input w3-border w3-round-xlarge" name="p_country" type="text" placeholder="Permanet Country"></p> 

            <p><button name="submit" class="w3-button w3-black w3-round-large">Register</button></p>
            
  </form>';
}  
?>


        </div>
        
        </div>

<?php include './includes/footer.php'; ?>
</body>
</html>
<?php
}else{
    header('../Index.php');
}
?>