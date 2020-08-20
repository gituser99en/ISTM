<?php
session_start();

function inserttest($iint, $ivar){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
 //connection//
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  
  //insert
$sql1 = "INSERT INTO zz_test1 (inputint, inputvarchar) VALUES ('$iint', '$ivar')";
$result1 = $conn->query($sql1);

 //if mysqli query
 if($result1 === TRUE){
     echo'sql ok';
     
 }else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
} 
  
  
  //Error Handling/////////////////////////////////////////////
print_r ($_SESSION);
var_dump ($iint, $ivar, $result1);
}
?>