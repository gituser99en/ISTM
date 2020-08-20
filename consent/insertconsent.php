<?php
session_start();

function insertconsent($uip){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  
  //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  
 $sql1 = "INSERT INTO consent (ip) VALUES ('$uip')"; 
  
  $result1 = $conn->query($sql1);
  
  //header

}
?>