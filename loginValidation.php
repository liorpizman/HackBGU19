<?php
$query = "SELECT * FROM users WHERE Username='$username' AND Paaword='$password'";
$result = mysqli_query($con, $query)  or die("Could not connect database " .mysqli_error($con));
window.location.href='loginValidation.php';

    $connect->close();
?>