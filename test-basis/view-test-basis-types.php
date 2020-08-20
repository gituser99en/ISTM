<?php
session_start();

function viewtbtype(){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
$sql1 = "SELECT * FROM test_basis_type WHERE name NOT LIKE 'legacy%'";
$result1 = $conn->query($sql1);
  
    echo "<table class='tbtypetable'; width='100%'>";
echo "<caption style='color: rgb(110, 136, 169)'>TEST BASIS TYPES</caption>";
 echo "<th width='10%'>ID</th>";
  echo "<th width='40%'>Name</th>";
  echo "<th width='40%'>Description</th>";
 while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
  // $typename= $row1["name"];
   //echo $typename;
   echo "<tr>";

echo "<td align=center>" . $row1['id'] .  "</td>";



echo "<td align=center>" . $row1['name'] .  "</td>";





echo "<td align=center>" . $row1['description'] .  "</td>";

echo "</tr>";
   
} 
echo "</table>";  
  
}
?>