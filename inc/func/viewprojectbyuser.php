<?php
session_start();

function viewprojbyuser($userid){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  
  //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
$sql1 = "SELECT DISTINCT * FROM project WHERE userid ='$userid'";
$result1 = $conn->query($sql1);
  
  //if mysqli query
 if(mysqli_query($conn, $sql1)){
    // echo'sql ok';
   //while array
while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
   $name1[0]= $row1["name"];
    $name2= $row1["name"];
  $pid2= $row1["pid"];
  $userid2= $row1["userid"];
  $groupid2= $row1["groupid"];
  
  echo $name2;
  echo $pid2;
  echo $userid2;
  echo $groupid2;
  // echo $name1;
   
}
//return $name1[0];
     
 }else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}
}
?>