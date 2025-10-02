<?php
$servername = "localhost";
$username = "root";
$password = "A1b2c#de%";
$dbname = "sppce";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>