<?php
session_start();

function dispdocid($di){
    
    //includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';

//connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
$sql1 = "SELECT * FROM document_id WHERE id = '$di'";
$result1 = $conn->query($sql1);
  
    //if mysqli query
 if(mysqli_query($conn, $sql1)){
    // echo'sql ok';
   while($row2 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
   $name2= $row2["name"];
     $uid2= $row2["uid"];
    
     $project2= $row2["project"];
     $owner2= $row2["owner"];
     $ver2= $row2["ver"];
     $stat2= $row2["stat"];
     $effective2= $row2["effective"];

echo'
<div class="flex-cont-la">
<div class="di-field">
                <div class="di-field-label">
                Document Name
                 </div> 
                <div class="di-field-cont">';
                echo $name2;
               echo' </div> 
</div> 
</div> 
<div class="flex-cont-la">
<div class="di-field">
                <div class="di-field-label">
                UID
                 </div> 
                <div class="di-field-cont">';
                 echo $uid2;
               echo' </div> 
</div> 
</div> 
<div class="flex-cont-la">
<div class="di-field">
                <div class="di-field-label">
                Project
                 </div> 
                <div class="di-field-cont">';
                 echo $project2;
               echo' </div> 
</div> 
</div> 
<div class="flex-cont-la">
<div class="di-field">
                <div class="di-field-label">
                Version
                 </div> 
                <div class="di-field-cont">';
               echo $ver2;
               echo ' </div> 
</div> 
</div> 
<div class="flex-cont-la">
<div class="di-field">
                <div class="di-field-label">
                Status
                 </div> 
                <div class="di-field-cont">';
                echo $stat2;
                echo'</div> 
</div> 
</div> 
<div class="flex-cont-la">
<div class="di-field">
                <div class="di-field-label">
                Effective Date
                 </div> 
                <div class="di-field-cont">';
               echo $effective2;
                echo'</div> 
</div> 
</div> 
<div class="flex-cont-la">
<div class="di-field-bottom">
                <div class="di-field-label">
                Owner
                 </div> 
                <div class="di-field-cont">';
                 echo $owner2;
                echo'</div> 
</div> 
</div> 
';
   }
 }

    
}
?>