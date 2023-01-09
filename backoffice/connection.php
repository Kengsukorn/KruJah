<?php
date_default_timezone_set("Asia/Bangkok");

$servername = "localhost";
$username = "root";
$password = "qwerty@123";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn, "SET NAMES 'utf8' "); 
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>