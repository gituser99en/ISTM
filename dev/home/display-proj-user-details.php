<?php
session_start();

function dispprojuserdet($projid){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
 // include_once $_SERVER['DOCUMENT_ROOT'].'/dev/home/display-user-project-details.php';
//  include_once $_SERVER['DOCUMENT_ROOT'].'/dev/home/display-user-group-details.php';

  
  //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
$sql1 = "SELECT DISTINCT  user_project.userid, user.name FROM user_project INNER JOIN user ON user_project.userid = user.id WHERE user_project.projectid ='1'";
$result1 = $conn->query($sql1);
 echo' <table style="width:100%; border:1px solid; border-color:rgb(110, 136, 169)">';
   echo "<caption style='color:rgb(110, 136, 169)'>PROJECT USERS</caption>";
if(mysqli_query($conn, $sql1)){  
while($row = mysqli_fetch_array($result1))
{
echo "<tr>";
echo "<th width='50%'>Name</th>";
echo "<td align=center>" . $row['name'] .  "</td>";

echo "</tr>";

echo "<tr class='space'>";
//echo "<th width='50%'></th>";
//echo "<td align=center>''</td>";

echo "</tr>";

echo "<tr>";
echo "<th width='50%'>User ID</th>";
echo "<td align=center>" . $row['userid'] .  "</td>";

echo "</tr>";

echo "<tr class='space'>";
//echo "<th width='50%'></th>";
//echo "<td align=center>''</td>";

echo "</tr>";


}
echo "</table>";
  
  
   // echo "querey fine";
} else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}
  
}
?>