<?php


function createTable(){
require_once "login.php";
$database = "inventory";

$tableName = "parts";//replace database name with whatever you would like 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE parts (
    itemNo INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    partName VARCHAR(30) NOT NULL,
    partModel VARCHAR(30) NOT NULL,
    quantity INT DEFAULT 0
    )";
    
    if ($conn->query($sql) === TRUE) {
      $message = "Table $tableName created successfully";
    } else {
      $message = "Error creating $tableName name: " . $conn->error;
    }

$conn->close();

   echo $message;

  }

  createTable();
?>