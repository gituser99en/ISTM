<?php
session_start();

function getusergroupsids($userid){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  
  //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
$sql1 = "SELECT groupid FROM user_groups WHERE userid ='$userid'";
$result1 = $conn->query($sql1);
  
  //if mysqli query
 if(mysqli_query($conn, $sql1)){
    // echo'sql ok';
   //while array
while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
   $groupid = $row1["groupid"];
  
  //echo $groupid;
   
}
return $groupid;
     
 }else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}
}
?>