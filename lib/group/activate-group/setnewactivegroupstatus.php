<?php
session_start();

function setnewactivegroupstatus($uid, $ogid, $ngid){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  include $_SERVER['DOCUMENT_ROOT'].'/lib/group/activate-group/setoldgroupstatus.php';
  
  
  
  //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
  $sql1 = "UPDATE user_groups SET status = 1 WHERE userid = '$uid' AND groupid = '$ngid'";
$result1 = $conn->query($sql1);
 // $sql1 = "INSERT INTO user_groups (userid, groupid, status) VALUES ('$uid', '1', '1')";
//$sql1 = "SELECT userid, groupid FROM user_groups WHERE userid = '$uid' AND status = '1'";
$result1 = $conn->query($sql1);
  
  echo setoldgroupstatus($uid, $ogid);

//if mysqli query
// if(mysqli_query($conn, $sql1)){
    // echo'sql ok';
   // return $uid; 
// }else{
 // return '0';
    //echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
//}  
 
 // return $gid[0];
}
?>