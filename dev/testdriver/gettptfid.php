<?php
session_start();

function gettptfid($did, $step, $tpid){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  //connection//
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//SQL///////////////////////////////////////////////////////////
//select
$sql1 = "SELECT * FROM test_procedure_field_template WHERE did = '$did' AND step = '$step' AND tpid = '$tpid'";
$result1 = $conn->query($sql1);
  
  //while array
while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
   $tfid= $row1["id"];
  
   
}
  return  $tfid;
}
?>