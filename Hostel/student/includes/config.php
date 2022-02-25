<?php
$dbuser="epiz_27789495";
$dbpass="e9E6xfRgq2W";
$host="sql303.epizy.com";
$db="epiz_27789495_hostel_management";
$conn =new mysqli($host,$dbuser, $dbpass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>