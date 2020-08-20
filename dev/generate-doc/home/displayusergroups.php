<?php
session_start();

function displayusergroups($uid){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  //connection//
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//SQL///////////////////////////////////////////////////////////
//select
$sql1 = "SELECT user_groups.groupid, groups.name FROM user_groups INNER JOIN groups ON user_groups.groupid = groups.id WHERE user_groups.userid='$uid'";
$result1 = $conn->query($sql1);
  
  echo' <table style="width:100%; border:1px solid; border-color:rgb(110, 136, 169)">'; 
echo "<caption style='color: #9370DB'>USER GROUPS</caption>";


while($row = mysqli_fetch_array($result1))
{
echo "<tr>";
echo "<th width='50%'>Group ID</th>";
echo "<td align=center>" . $row['groupid'] .  "</td>";

echo "</tr>";

echo "<tr class='space'>";
//echo "<th width='50%'></th>";
//echo "<td align=center>''</td>";

echo "</tr>";

echo "<tr>";
echo "<th width='50%'>Group Name</th>";
echo "<td align=center>" . $row['name'] .  "</td>";

echo "</tr>";

echo "<tr class='space'>";
//echo "<th width='50%'></th>";
//echo "<td align=center>''</td>";

echo "</tr>";



}
echo "</table>";
    

}
?>