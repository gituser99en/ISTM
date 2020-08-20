<?php
session_start();

function viewtkbu1(){
    
$col=0;

//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
$sql1 = "SELECT time_keeping.pid, time_keeping.username, time_keeping.activityid, time_keeping_activity.name, time_keeping.timeinmin,time_keeping.ts FROM time_keeping INNER JOIN time_keeping_activity ON time_keeping.activityid = time_keeping_activity.id WHERE time_keeping.pid = 1 AND time_keeping.userid =1";
$result1 = $conn->query($sql1);
  
  //rows table
if(mysqli_query($conn, $sql1)){
  
  echo "<table class='purchasetable'; width='49%'>";
echo "<caption style='color: #9370DB'>AD PURCHASE DETAILS</caption>";

echo'<div>';

while($row = mysqli_fetch_array($result1))
{
echo "<tr>";
  if ($col==0){
   echo'<div>';
    echo'<tr>';
    
    }
  $col ++;

echo "<td align=center>" . $row['pid'] .  "</td>";

echo "<td align=center>" . $row['username'] .  "</td>";

//echo "</tr>";

//echo "<tr class='space'>";
//echo "<th width='50%'></th>";
//echo "<td align=center>''</td>";

//echo "</tr>";

//echo "<tr>";

echo "<td align=center>" . $row['activityid'] .  "</td>";


echo "<td align=center>" . $row['name'] .  "</td>";


echo "<td align=center>" . $row['timeinmin'] .  "</td>";


echo "<td align=center>" . $row['ts'] .  "</td>";



//echo "</tr>";
 if ($col==5){
    echo'</tr>';
   echo'</div>';
    $col ='0';
    }
echo'</tr>';
}
  
echo "</table>";
echo'</div>';    
  
   // echo "querey fine";
} else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}
 
}
?>