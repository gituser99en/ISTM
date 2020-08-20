<?php
session_start();


$typename = $_POST['tname'];
$typedesc = $_POST['tdesc'];


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  
  $sql1 = "INSERT INTO test_basis_type (name, description) VALUES ('$typename', '$typedesc')";
  $result1 = $conn->query($sql1);

?>