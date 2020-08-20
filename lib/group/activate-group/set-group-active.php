<?php
session_start();

function setgroupactive($uid, $gid){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  //connection//
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  //update
$sql1 = "UPDATE user_groups SET status = 1 WHERE userid = '$uid' AND groupid = '$gid'";
$result1 = $conn->query($sql1);
  echo $sql1;
  if(mysqli_query($conn, $sql1)){
     echo'sql ok';
     
 }else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}
  
  
}
?>