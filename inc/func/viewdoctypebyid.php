<?php
session_start();

function viewdoctypebyid(){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
//connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
$sql1 = "SELECT * FROM document_type ORDER BY catid ASC";
$result1 = $conn->query($sql1);  

  echo "<table class='doctypetable'; width='100%'>";
echo "<caption style='color: #9370DB'>AD DOC TYPE DETAILS</caption>";

echo "<th width='5%'>ID</th>";
echo "<th width='15%'>NAME</th>";
echo "<th width='65%'>DESC</th>";
echo "<th width='10%'>CAT</th>";

echo "<th width='5%'>CATID</th>";

  
  
 //while array
while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
   $id= $row1["id"];
  $name= $row1["name"];
  $description= $row1["description"];
  $catergory= $row1["catergory"];
  $catid= $row1["catid"];
  
  echo "<tr>";

echo "<td align=center>" . $row1['id'] .  "</td>";

echo "<td align=center>" . $row1['name'] .  "</td>";
  echo "<td align=center>" . $row1['description'] .  "</td>";

echo "<td align=center>" . $row1['catergory'] .  "</td>";
  echo "<td align=center>" . $row1['catid'] .  "</td>";


 echo "</tr>"; 
  
} 
 echo "</table>"; 
}
?>