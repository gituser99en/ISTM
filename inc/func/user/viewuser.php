<?php
session_start();

function viewuser(){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  
  //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
$sql1 = "SELECT * FROM user ";
$result1 = $conn->query($sql1);
  
  //if mysqli query
 if(mysqli_query($conn, $sql1)){
    // echo'sql ok';
   //while array
while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
   $id= $row1["id"];
   $name = $row1["name"];
   
   $ts = $row1["ts"];
  $email = $row1["email"];
   $upassword= $row1["password"];
  
  echo'ID: '; echo $id; echo' <br></br>';
  echo'NAME: ';echo $name; echo' <br></br>';
 
 echo'TS: '; echo $ts; echo' <br></br>';
   echo'EMAIL: ';echo $email; echo' <br></br>';
 echo'PW: '; echo $upassword; echo' <br></br>';
  echo' <br></br>';
  
  
  
   
}
//return $name1[0];
     
 }else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}
}
?>