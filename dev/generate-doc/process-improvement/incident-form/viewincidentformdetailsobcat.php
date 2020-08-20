<?php
session_start();

function viewincidentformdetailsobcat($gid, $pid, $did, $userid, $dtid, $sbid, $name){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
//connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
$sql1 = "SELECT * FROM document_incident_form WHERE did ='$did' ORDER BY catergory";
 // $sql1 = "SELECT analysis_test.id, analysis_test.name, analysis_test.description, document_test_analysis.inserted_data  FROM analysis_test INNER JOIN document_test_analysis ON analysis_test.id = document_test_analysis.qid WHERE document_test_analysis.did ='$did'";
$result1 = $conn->query($sql1);  

  echo "<table class='incidentformtable'; width='100%'>";
//echo "<caption style='color: #9370DB'>TEST ANALYSIS DETAILS</caption>";

echo '<th width="5%" style="
    background-color: rgb(110, 136, 169);
    color:white;">  <button onclick="document.location=';echo"'http://www.istm.online/dev/generate-doc/callpage.php?userid="; echo $userid; echo"&docidentifier=";echo $did; echo"&gid="; echo $gid; echo"&pid="; echo $pid; echo"&docname="; echo $name; echo"&doctype="; echo $dtid; echo"&sbid=1"; echo"'"; echo'">ID</button></th>';
echo '<th width="15%" style="
    background-color: rgb(110, 136, 169);
    color:white;">NAME</th>';
echo '<th width="40%" style="
    background-color: rgb(110, 136, 169);
    color:white;">DESC</th>';
  echo '<th width="15%" style="
    background-color: rgb(110, 136, 169);
    color:white;">OWNER</th>';
  echo '<th width="15%" style="
    background-color: rgb(110, 136, 169);
    color:white;">  <button onclick="document.location=';echo"'http://www.istm.online/dev/generate-doc/callpage.php?userid="; echo $userid; echo"&docidentifier=";echo $did; echo"&gid="; echo $gid; echo"&pid="; echo $pid; echo"&docname="; echo $name; echo"&doctype="; echo $dtid; echo"&sbid=2"; echo"'"; echo'">CATERGORY</button></th>';
  echo '<th width="10%" style="
    background-color: rgb(110, 136, 169);
    color:white;">STATUS</th>';


  
  
 //while array
while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
   $id= $row1["id"];
  $name= $row1["name"];
  $description= $row1["description"];
  // $insdat= $row1["inserted_data"];
   $status= $row1["status"];
  $owner= $row1["owner"];
  $catergory= $row1["catergory"];

  
  echo "<tr>";

echo "<td align=center>" . $row1['id'] .  "</td>";

echo "<td align=center>" . $row1['name'] .  "</td>";
  echo "<td align=center>" . $row1['description'] .  "</td>";
  echo "<td align=center>" . $row1['owner'] .  "</td>";
   echo "<td align=center>" . $row1['catergory'] .  "</td>";
   echo "<td align=center>" . $row1['status'] .  "</td>";
/*
echo'<td> <form action="updtae.php" method="post" style="
    display: flex;
"> ';
<input type="text" name="tad" placeholder="'; echo $insdat; echo'" id="tad">
<input type="hidden" name="taq" id="taq" value="';echo $id; echo'">
<input type="hidden" name="did" id="did" value="';echo $did; echo'">
<input type="hidden" name="did" id="gid" value="';echo $gid; echo'">
<input type="hidden" name="did" id="pid" value="';echo $pid; echo'">

<input type="submit" value="SUBMIT"></form></td>';
*/
 echo "</tr>"; 

} 
 echo "</table>"; 
}
?>