<?php
session_start();

function instpeinf($gid, $pid, $did, $tptid){
    


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
$sql1 = "INSERT INTO test_procedure_template (gid, pid, tpeid, tptid) VALUES ('$gid', '$pid', '$did', '$tptid')";
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