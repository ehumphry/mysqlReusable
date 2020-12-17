<?php
function deleteTable(){
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
$sql = "DROP TABLE parts;";
    
    if ($conn->query($sql) === TRUE) {
      $message = "Table $tableName deleted successfully";
    } else {
      $message = "Error deleting table $tableName: " . $conn->error;
    }

$conn->close();
echo $message;

}

deleteTable();
?>