<?php
session_start();

function dispal(){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
$sql1 = "SELECT name, link FROM admin_links WHERE id LIKE '%'";
$result1 = $conn->query($sql1);
  
  //while array
while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
   $locname1= $row1["name"];
  $locname2= $row1["link"];
   
  
  echo  $locname1;
  echo  $locname2;
}
}
?>