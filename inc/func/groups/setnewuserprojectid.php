<?php
session_start();

function setnewuserprojectid($uid){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  
  
  //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//  $inserted =0;
//  while ($inserted ==0){
//  $sql = "SELECT userid, projectid, status  FROM user_project WHERE userid = '$uid' AND projectid ='1' ";
//$result = $conn->query($sql1);
//  $count = mysqli_num_rows($result);
//  try{
//if ($count ==0){
//select
  $sql1 = "INSERT INTO user_project (userid, projectid, status) VALUES ('$uid', '1', '1')";
//$sql1 = "SELECT userid, groupid FROM user_groups WHERE userid = '$uid' AND status = '1'";
$result1 = $conn->query($sql1);
//$count1 = mysqli_num_rows($result1);
  
//  if ($count1==1){
//    $inserted =1;
//  }else{
//    $inserted=0;
//  }
//}
//  }
//  }
//if mysqli query
// if(mysqli_query($conn, $sql1)){
    // echo'sql ok';
  //  return '1'; 
// }else{
 //  return '0';
   // echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
//}  
 
 // return $gid[0];
}
?>