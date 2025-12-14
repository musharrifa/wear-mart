<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "wearmart";

$con = mysqli_connect("localhost","root","","wearmart");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>