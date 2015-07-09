<?php
$servername = "fpaData.db.5802143.hostedresource.com";
$username = "fpaData";
$password = "FPAadmin@123";
$dbname = "fpaData";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



?>