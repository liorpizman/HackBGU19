<?php
$x=$_POST['courseid'];
$y=$_POST['coursename'];
$z=$_POST['desc'];
$w=$_POST['email'];
$m=date("Y/m/d");
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rainforestdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO materials (courseID, courseName, descP, email, dateP)VALUES ('$x',' $y',' $z',' $w', ' $m')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location: /HackBgu19/viewMaterial.php");

$conn->close();
?>