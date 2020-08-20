<?php
session_start();

function viewtestanalysisdetails(){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
//connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
$sql1 = "SELECT * FROM analysis_test";
$result1 = $conn->query($sql1);  

  echo "<table class='testanalysistable'; width='100%'>";
echo "<caption style='color: #9370DB'>TEST ANALYSIS DETAILS</caption>";

echo "<th width='5%'>ID</th>";
echo "<th width='15%'>NAME</th>";
echo "<th width='65%'>DESC</th>";


  
  
 //while array
while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
   $id= $row1["id"];
  $name= $row1["name"];
  $description= $row1["description"];

  
  echo "<tr>";

echo "<td align=center>" . $row1['id'] .  "</td>";

echo "<td align=center>" . $row1['name'] .  "</td>";
  echo "<td align=center>" . $row1['description'] .  "</td>";



 echo "</tr>"; 
  
} 
 echo "</table>"; 
}
?>