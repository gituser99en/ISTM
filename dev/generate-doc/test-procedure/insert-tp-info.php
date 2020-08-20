<?php
session_start();

function instpinf($name, $suid, $tccs, $gid, $pid, $did){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
//insert
$sql1 = "INSERT INTO test_procedure_info (name, suid, test_condition, gid, pid, docident) VALUES ('$name', '$suid', '$tccs', '$gid', '$pid', '$did')";
$result1 = $conn->query($sql1);
  
  //if mysqli query
 if(mysqli_query($conn, $sql1)){
     //echo'sql ok';
     
 }else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}
  
 // echo var_dump ($name, $suid, $tccs, $gid, $pid, $did);
}
?>