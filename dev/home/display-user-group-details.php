<?php
session_start();

function dispusergdet($userid){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
$sql1 = "SELECT * FROM groups WHERE userid ='$userid'";
$result1 = $conn->query($sql1);
  
if(mysqli_query($conn, $sql1)){  
while($row = mysqli_fetch_array($result1))
{

echo "<tr>";
echo "<th width='50%'>Group</th>";
echo "<td align=center>" . $row['name'] .  "</td>";

echo "</tr>";

echo "<tr class='space'>";
//echo "<th width='50%'></th>";
//echo "<td align=center>''</td>";

echo "</tr>";
  
  echo "<tr>";
echo "<th width='50%'>Group ID</th>";
echo "<td align=center>" . $row['id'] .  "</td>";

echo "</tr>";

echo "<tr class='space'>";
//echo "<th width='50%'></th>";
//echo "<td align=center>''</td>";

echo "</tr>";
  
 
}

  
  
   // echo "querey fine";
} else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}
  
}
?>