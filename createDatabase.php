<?php
require_once "login.php";

$databaseName = "inventory";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE $databaseName";
if ($conn->query($sql) === TRUE) {
  echo "$databaseName created successfully";
} else {
  echo "Error creating $databaseName: " . $conn->error;
}

$conn->close();
?>