<?php
$x=$_POST['username'];
$y=$_POST['password'];
$z=$_POST['fullname'];
$w=$_POST['email'];
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

$sql = "INSERT INTO users (user_name, password, fullName, email)VALUES ('$x',' $y',' $z',' $w')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location: /HackBgu19/viewMaterial.php");

$conn->close();
?>