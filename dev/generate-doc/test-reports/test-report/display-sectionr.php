<?php
session_start();

function displaysectionr($did){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
 // include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-reports/test-report/display-test-basis-field.php';

  
 //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
//select
$sql1 = "SELECT * FROM test_report_red WHERE did ='$did'";
$result1 = $conn->query($sql1);
  

  
 

 //  echo "<caption style='color:rgb(110, 136, 169)'>PROJECT USERS</caption>";
if(mysqli_query($conn, $sql1)){  
  
while($row = mysqli_fetch_array($result1))
{
 // echo'<div class="red-issue">';
   echo' <table style="width:100%; border:1px solid; border-color:red">';
echo "<tr>";
echo "<th width='50%'>ID</th>";
echo "<td align=center>" . $row['id'] .  "</td>";

echo "</tr>";

echo "<tr class='space'>";
//echo "<th width='50%'></th>";
//echo "<td align=center>''</td>";

echo "</tr>";

echo "<tr>";
echo "<th width='50%'>Title</th>";
echo "<td align=center>" . $row['title'] .  "</td>";

echo "</tr>";

echo "<tr class='space'>";
//echo "<th width='50%'></th>";
//echo "<td align=center>''</td>";

echo "</tr>";
  
  echo "<tr>";
echo "<th width='50%'>Description</th>";
echo "<td align=center>" . $row['description'] .  "</td>";

echo "</tr>";

echo "<tr class='space'>";
//echo "<th width='50%'></th>";
//echo "<td align=center>''</td>";

echo "</tr>";
  echo "<tr>";
echo "<th width='50%'>User</th>";
echo "<td align=center>" . $row['username'] .  "</td>";

echo "</tr>";

echo "<tr class='space'>";
//echo "<th width='50%'></th>";
//echo "<td align=center>''</td>";

echo "</tr>";
  
  echo "<tr>";
echo "<th width='50%'>Severity</th>";
echo "<td align=center>" . $row['severity'] .  "</td>";

echo "</tr>";

echo "<tr class='space'>";
//echo "<th width='50%'></th>";
//echo "<td align=center>''</td>";

echo "</tr>";
  
  echo "<tr>";
echo "<th width='50%'>Date</th>";
echo "<td align=center>" . $row['ts'] .  "</td>";

echo "</tr>";

echo "<tr class='space'>";
//echo "<th width='50%'></th>";
//echo "<td align=center>''</td>";

echo "</tr>";

 // echo'</div>';
echo "</table>";
}

  
  
   // echo "querey fine";
} else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
} 

/*     echo'<div class="flex-cont-la">
<div class="tbf-field-mi">
                <div class="tbf-field-name">';
                echo $name1;
                echo' </div> 
                  <div class="tbf-field-uid">';
                echo $uid1;
                echo' </div> 
                  <div class="tbf-field-type">';
               echo $type1;
                 echo'</div> 
                  <div class="tbf-field-project">';
               echo $project1;
                 echo'</div> 
                  <div class="tbf-field-owner">';
                echo $owner1;
                 echo'</div> 
                 <div class="tbf-field-version">';
                echo $ver1;
                 echo'</div> 
                 <div class="tbf-field-status">';
                echo $stat1;
                 echo'</div> 
                 <div class="tbf-field-location">';
                echo $location1;
                 echo'</div> 
                
</div> 
</div> 

';
       
echo displayfield($di, $uid1);  
*/   

     
  
  
    

  
  
}
?>