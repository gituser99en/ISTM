<?php
session_start();

function viewprojects(){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  
  //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
$sql1 = "SELECT * FROM project ";
$result1 = $conn->query($sql1);
  
  //if mysqli query
 if(mysqli_query($conn, $sql1)){
    // echo'sql ok';
   //while array
while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
   $id= $row1["id"];
   $name = $row1["name"];
   $uid = $row1["uid"];
   $descrip = $row1["description"];
   $userid = $row1["userid"];
   $owner = $row1["owner"];
   $ownerid = $row1["ownerid"];
   $ts = $row1["ts"];
   $gpassword= $row1["password"];
  
  echo'ID: '; echo $id; echo' <br></br>';
  echo'NAME: ';echo $name; echo' <br></br>';
  echo'UID: ';echo $uid; echo' <br></br>';
 echo'D: '; echo $descrip; echo' <br></br>';
  echo'USERID: ';echo $userid; echo' <br></br>';
 echo'O: '; echo $owner; echo' <br></br>';
 echo'OID: '; echo $ownerid; echo' <br></br>';
 echo'TS: '; echo $ts; echo' <br></br>';
 echo'PW: '; echo $gpassword; echo' <br></br>';
  echo' <br></br>';
  
  
  
   
}
//return $name1[0];
     
 }else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}
}
?>