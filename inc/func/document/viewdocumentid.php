<?php
session_start();

function viewdocumentid(){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  
  //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
$sql1 = "SELECT * FROM document_id ";
$result1 = $conn->query($sql1);
  
  //if mysqli query
 if(mysqli_query($conn, $sql1)){
    // echo'sql ok';
   //while array
while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
   $id= $row1["id"];
  $gid= $row1["gid"];
  $pid= $row1["pid"];
  $userid= $row1["userid"];
   $name = $row1["name"];
  $uid= $row1["uid"];
  $project= $row1["project"];
  $ver= $row1["ver"];
  $stat= $row1["stat"];
  $effective= $row1["effective"];
  $owner= $row1["owner"];
  $doctypeid= $row1["doctypeid"];
  $doctypename= $row1["doctypename"];
   
   $ts = $row1["ts"];
 
  
  echo'ID: '; echo $id; echo' <br></br>';
  echo'GID: '; echo $gid; echo' <br></br>';
  echo'PID: '; echo $pid; echo' <br></br>';
   echo'USERID: '; echo $userid; echo' <br></br>';
  echo'NAME: ';echo $name; echo' <br></br>';
   echo'UID: '; echo $uid; echo' <br></br>';
   echo'POJECT: '; echo $project; echo' <br></br>';
   echo'VER: '; echo $ver; echo' <br></br>';
   echo'STAT: '; echo $stat; echo' <br></br>';
   echo'EFFECTIVE: '; echo $effective; echo' <br></br>';
   echo'OWNER: '; echo $owner; echo' <br></br>';
   echo'DOCTYPEID: '; echo $doctypeid; echo' <br></br>';
   echo'DOCTYPENAME: '; echo $doctypename; echo' <br></br>';
 
 echo'TS: '; echo $ts; echo' <br></br>';
  
  echo' <br></br>';
  
  
  
   
}
//return $name1[0];
     
 }else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}
}
?>