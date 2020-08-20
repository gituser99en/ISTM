<?php
session_start();

function disptctable(){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
 //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
$sql1 = "SELECT name, uid FROM test_condition_field WHERE project = 'ISTM'";
$result1 = $conn->query($sql1); 
  
  
  
  
 if(mysqli_query($conn, $sql1)){
  
  echo "<table class='tctable'; width='100%'>";
echo "<caption style='color: #9370DB'>CREDITS DETAILS</caption>";
echo "<tr>";
while($row = mysqli_fetch_array($result1))
{

//echo "<td style='transform:rotate(90deg)'>" . $row['uid'] .  "</td>";
echo "<td style='transform:rotate(90deg)'>" . $row['uid'] .  "" . $row['name'] .  "</td>";






}
   echo "</tr>";
echo "</table>";
    
  
   // echo "querey fine";
} else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}

}
?>