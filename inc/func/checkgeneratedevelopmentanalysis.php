<?php
session_start();

function cdagen($did){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  
  //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
$sql1 = "SELECT * FROM document_development_analysis WHERE did ='$did'";
$result1 = $conn->query($sql1);
  
  if ($result1->num_rows > 0) {
   // echo'exists';
    return 1;
  }else{
   // echo'notexists';
  return 0;}
}
?>