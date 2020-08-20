<?php
session_start();


    
$gid = $_POST['gid'];
$pid = $_POST['pid'];
$userid = $_POST['userid'];
$uusername = $_POST['uusername'];
//$activity = $_POST['activity'];
$activityid = $_POST['activityid'];
$timeinmin = $_POST['timeinmin'];
$last_id = $_POST['did'];
$name = $_POST['docname'];
$dtid = $_POST['doctypeid'];


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
// $pdr =0;
//while ($pdr=0){
  //insert
$sql1 = "INSERT INTO time_keeping (gid, pid, userid, username, activityid, timeinmin) VALUES ('$gid', '$pid', '$userid', '$uusername' ,'$activityid', '$timeinmin')";
$result1 = $conn->query($sql1);
//if mysqli query
// if ($result1->num_rows = 1) {
   //  echo'sql ok';
  // $pdr =0;
   header('Location:../callpage.php?userid='.$userid.'&docidentifier='.$last_id.'&gid='.$gid.'&pid='.$pid.'&docname='.$name.'&doctype='.$dtid.''); 
// }else{
 //   echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
   // $pdr =1;
  // header('Location:../callpage.php?userid='.$userid.'&docidentifier='.$last_id.'&gid='.$gid.'&pid='.$pid.'&docname='.$name.'&doctype='.$dtid.''); 
 //  }
//}
//if($pdr=1){
//   header('Location:../callpage.php?userid='.$userid.'&docidentifier='.$last_id.'&gid='.$gid.'&pid='.$pid.'&docname='.$name.'&doctype='.$dtid.''); 
//}


?>