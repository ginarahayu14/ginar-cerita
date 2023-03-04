<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$database = "ineffable";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
