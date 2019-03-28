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

echo "<tr>";
echo "<td>" . $row['$x'] . "</td>";
echo "<td>" . $row['$y'] . "</td>";
echo "<td>" . $row['$z'] . "</td>";
echo "<td>" . $row['$w'] . "</td>";
echo "<td>" . $row['$m'] . "</td>";
echo "</tr>";

header("Location: /HackBgu19/viewMaterial.html");

$conn->close();
?>