<?php
session_start();

function getuseractivegroupid($uid){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  
  
  //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
$sql1 = "SELECT userid, groupid FROM user_groups WHERE userid = '$uid' AND status = '1'";
$result1 = $conn->query($sql1);

  
  //while array
while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
   $gid= $row1["groupid"];
   
}
  return $gid[0];
}
?>