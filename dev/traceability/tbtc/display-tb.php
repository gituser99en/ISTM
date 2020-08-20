<?php
session_start();

function disptbtable(){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
 //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
$sql1 = "SELECT name, uid FROM test_basis_field WHERE project = 'ISTM'";
$result1 = $conn->query($sql1); 
  
  
  
  
  if(mysqli_query($conn, $sql1)){
  
  echo "<table class='tbtable'; width='100%'>";
echo "<caption style='color: #9370DB'>TB TC TRACEABILITY</caption>";

echo "<th width='80%'>NAME</th>";
echo "<th width='20%'>ID</th>";


while($row = mysqli_fetch_array($result1))
{
echo "<tr>";

echo "<td align=center>" . $row['name'] .  "</td>";

echo "<td align=center>" . $row['uid'] .  "</td>";



echo "</tr>";


}
echo "</table>";
    
  
   // echo "querey fine";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

}
?>