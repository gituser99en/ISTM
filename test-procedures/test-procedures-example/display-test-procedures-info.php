<?php
session_start();

function dispprocinf(){
    
    //includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';

//connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
$sql1 = "SELECT * FROM test_procedure_info WHERE suid = 'ITCL'";
$result1 = $conn->query($sql1);
  
    //if mysqli query
 if(mysqli_query($conn, $sql1)){
    // echo'sql ok';
   while($row2 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
      $tcinc2= $row2["test_condition"];
      $name2= $row2["name"];
     $uid2= $row2["suid"];
     
  // $name2= $row2["name"];
   //  $uid2= $row2["uid"];
    
  //   $project2= $row2["project"];
  //   $owner2= $row2["owner"];
  //   $ver2= $row2["version"];
  //   $stat2= $row2["status"];
  //   $effective2= $row2["effective"];

echo'
<div class="flex-cont-la">
<div class="di-field">
                <div class="di-field-label">
                Source Name
                 </div> 
                <div class="di-field-cont">';
                echo $name2;
               echo' </div> 
</div> 
</div> 
<div class="flex-cont-la">
<div class="di-field">
                <div class="di-field-label">
                Source UID
                 </div> 
                <div class="di-field-cont">';
                 echo $uid2;
               echo' </div> 
</div> 
</div> 
<div class="flex-cont-la">
<div class="di-field">
                <div class="di-field-label">
                Test Conditions Covered
                 </div> 
                <div class="di-field-cont">';
                 echo $tcinc2;
               echo' </div> 
</div> 
</div> 

';
   }
 }

    
}
?>