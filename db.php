<?php
$servername = "mysql://$OPENSHIFT_MYSQL_DB_HOST:$OPENSHIFT_MYSQL_DB_PORT/";
$username = "adminA9ARczK";
$password = "4PeDU7LkX2Uj";
$dbname = "fpa";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



?>
