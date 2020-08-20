<?php
session_start();

function doclist(){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
 
  
  $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  
  $sql1 = "SELECT * FROM document_id WHERE pid ='1'";

$result1 = $conn->query($sql1);
$ctr='1';
while($row1 = mysqli_fetch_array($result1)){
   $name= $row1["name"];
  $userid= $row1["userid"];
  $last_id= $row1["id"];
  $gid= $row1["gid"];
  $pid= $row1["pid"];
    $dtid= $row1["doctypeid"];
 // echo $name;
 // echo' <br></br>';
  //if($ctr == 1){
  //  echo'<div>';
 // }
  echo'<a href="/dev/generate-doc/callpage.php?userid='.$userid.'&docidentifier='.$last_id.'&gid='.$gid.'&pid='.$pid.'&docname='.$name.'&doctype='.$dtid.'">';echo $name; echo'</a>';
   echo' <br></br>';
 // $ctr ++;
 // if($ctr == 10){
 //   $ctr=1;
 //   echo'</div>';
 // }
} 
}
?>