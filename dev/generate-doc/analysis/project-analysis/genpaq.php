<?php
session_start();

function genpaq($gid, $pid, $did){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql1 ="INSERT INTO document_project_analysis
  (gid, pid, qid, did)
VALUES
('$gid', '$pid', '1', '$did'),
('$gid', '$pid', '2', '$did'),
('$gid', '$pid', '3', '$did'),
('$gid', '$pid', '4', '$did'),
('$gid', '$pid', '5', '$did'),
('$gid', '$pid', '6', '$did'),
('$gid', '$pid', '7', '$did'),
('$gid', '$pid', '8', '$did'),
('$gid', '$pid', '9', '$did')";
  
  //if mysqli query
 if(mysqli_query($conn, $sql1)){
     echo'sql ok';
     
 }else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}
 
}
?>