<?php
date_default_timezone_set("Asia/Bangkok");

$servername = "localhost";
$username = "u658774035_kay";
$password = "Kay0887501188";
$dbname = "u658774035_krujah";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8"); //set ข้อมูลในฐานข้อมูลเป็นภาษาไทย
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>