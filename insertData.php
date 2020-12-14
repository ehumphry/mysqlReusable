<?php
require_once "login.php";
require "cleanSql.php";

$name_of_part = clean_input($_POST['partName']);
$model_of_part = clean_input($_POST['partModel']);
$quantity_of_part = clean_input($_POST['partQuantity']);

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT partName, partModel FROM parts WHERE partName = '$name_of_part' AND partModel = '$model_of_part'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    die("Part already exists");
}
else{
    $sql = "INSERT INTO parts (partName, partModel, quantity)
    VALUES ('$name_of_part', '$model_of_part', $quantity_of_part)";

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>