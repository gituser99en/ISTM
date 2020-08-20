<?php
session_start();

function viewproanalysisdetails1($gid, $pid, $did){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
//connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
//$sql1 = "SELECT * FROM analysis_test";
  $sql1 = "SELECT analysis_pro.id, analysis_pro.name, analysis_pro.description, document_project_analysis.inserted_data  FROM analysis_pro INNER JOIN document_project_analysis ON analysis_pro.id = document_project_analysis.qid WHERE document_project_analysis.did ='$did'";
$result1 = $conn->query($sql1);  

  echo "<table class='testanalysistable'; width='100%'>";
echo "<caption style='color: #9370DB'>TEST ANALYSIS DETAILS</caption>";

echo "<th width='5%'>ID</th>";
echo "<th width='15%'>NAME</th>";
echo "<th width='40%'>DESC</th>";
  echo "<th width='40%'>DATA</th>";


  
  
 //while array
while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
   $id= $row1["id"];
  $name= $row1["name"];
  $description= $row1["description"];
   $insdat= $row1["inserted_data"];

  
  echo "<tr>";

echo "<td align=center>" . $row1['id'] .  "</td>";

echo "<td align=center>" . $row1['name'] .  "</td>";
  echo "<td align=center>" . $row1['description'] .  "</td>";

echo'<td> <form action="updtae.php" method="post" style="
    display: flex;
"> 
<input type="text" name="tad" placeholder="'; echo $insdat; echo'" id="tad">
<input type="hidden" name="taq" id="taq" value="';echo $id; echo'">
<input type="hidden" name="did" id="did" value="';echo $did; echo'">
<input type="hidden" name="gid" id="gid" value="';echo $gid; echo'">
<input type="hidden" name="pid" id="pid" value="';echo $pid; echo'">
<input type="submit" value="SUBMIT"></form></td>';

 echo "</tr>"; 

} 
 echo "</table>"; 
}
?>