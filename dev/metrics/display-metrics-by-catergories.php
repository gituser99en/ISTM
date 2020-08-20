<?php
session_start();

function displaymetricbycatergories($catid){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
$sql1 = "SELECT * FROM metrics WHERE type LIKE '$catid'";
$result1 = $conn->query($sql1);
  
 if(mysqli_query($conn, $sql1)){
  
  echo "<table class='purchasetable'; width='100%'>";
echo "<caption style='color: rgb(110, 136, 169); font-weight: 700;'>"; echo $catid;echo"</caption>";

echo "<th width='5%' style='color: rgb(110, 136, 169); font-weight: 500;'>ID</th>";
echo "<th width='75%' style='color: rgb(110, 136, 169); font-weight: 500;'>Name</th>";
echo "<th width='20%' style='color: rgb(110, 136, 169); font-weight: 500;'>type</th>";



while($row = mysqli_fetch_array($result1))
{
echo "<tr>";

echo "<td align=center>" . $row['id'] .  "</td>";

echo "<td align=center>" . $row['name'] .  "</td>";

//echo "</tr>";

//echo "<tr class='space'>";
//echo "<th width='50%'></th>";
//echo "<td align=center>''</td>";

//echo "</tr>";

//echo "<tr>";

echo "<td align=center>" . $row['type'] .  "</td>";




echo "</tr>";


}
echo "</table>";
    
  
   // echo "querey fine";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
}
?>