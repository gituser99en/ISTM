<?php
session_start();


$typename = $_POST['tname'];
$typedesc = $_POST['tdesc'];
$typeid = $_POST['tid'];


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  
 $sql1 = "UPDATE test_basis_type SET name = '$typename', description = '$typedesc' WHERE id = '$typeid'";
  $result1 = $conn->query($sql1);

?>