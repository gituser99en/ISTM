<?php
session_start();

function dispti($did){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';

//connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
$sql1 = "SELECT * FROM test_incident WHERE pid ='$did'";
$result1 = $conn->query($sql1);

if(mysqli_query($conn, $sql1)){
  
  echo "<table class='titable'; width='100%'>";
echo "<caption style='color: #9370DB'>AD PURCHASE DETAILS</caption>";

echo "<th width='5%'>ID</th>";
echo "<th width='20%'>Name</th>";
  echo "<th width='40%'>Description</th>";
  echo "<th width='10%'>Owner</th>";
echo "<th width='10%'>Status</th>";
  echo "<th width='5%'>Project ID</th>";
   echo "<th width=10%'>Date</th>";



while($row = mysqli_fetch_array($result1))
{
echo "<tr>";

echo "<td align=center>" . $row['id'] .  "</td>";



echo "<td align=center>" . $row['name'] .  "</td>";
  
  echo "<td align=center>" . $row['description'] .  "</td>";
echo "<td align=center>" . $row['owner'] .  "</td>";

echo "<td align=center>" . $row['status'] .  "</td>";
  
  echo "<td align=center>" . $row['pid'] .  "</td>";
   echo "<td align=center>" . $row['ts'] .  "</td>";






echo "</tr>";


}
echo "</table>";
    
  
   // echo "querey fine";
} else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}



}
?>