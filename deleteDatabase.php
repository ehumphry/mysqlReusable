<?php
require_once "login.php";

$databaseName = "inventory";//replace database name with whatever you would like 

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "DROP DATABASE IF EXISTS $databaseName;";
if ($conn->query($sql) === TRUE) {
  echo "$databaseName deleted successfully";
} else {
  echo "Error: $databaseName doesn't exist: " . $conn->error;
}

$conn->close();
?>