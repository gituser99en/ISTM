<?php
session_start();

function displayintroduction($did){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/dbtp.php';
 //connection//
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//SQL///////////////////////////////////////////////////////////
//select
$sql1 = "SELECT * FROM test_plan_introduction WHERE docid = '$did'";
$result1 = $conn->query($sql1);
  
  //while array
while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
   $intro= $row1["introduction"];
   echo $intro;
}
 
  
}
?>