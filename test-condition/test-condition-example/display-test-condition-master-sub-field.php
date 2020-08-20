<?php
session_start();

function displayfieldsi($suid){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
 //connection
$conn1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
} 
 
//select
$sql2 = "SELECT * FROM test_condition_master_sub_field WHERE uid LIKE '$suid'";
$result2 = $conn1->query($sql2);
  

  
  //if mysqli query
 if(mysqli_query($conn1, $sql2)){
    // echo'sql ok';
   while($row2 = mysqli_fetch_array($result2)){
  // $etids[$c]= $row1["loginid"];
   
   $name2= $row2["name"];
     $uid2= $row2["uid"];
     $desc2= $row2["description"];
      $prio2= $row2["priority"];
     $project2= $row2["project"];
     $owner2= $row2["owner"];
     $ver2= $row2["ver"];
     $stat2= $row2["stat"];
     $location2= $row2["location"];
     
     echo'<div class="flex-cont-la">
<div class="tbf-field">
                <div class="tbf-field-name-si">';
                echo $name2;
                echo' </div> 
                  <div class="tbf-field-uid-si">';
                echo $uid2;
                echo' </div> 
                  <div class="tbf-field-description-si">';
               echo $desc2;
                 echo'</div> 
                 <div class="tbf-field-priority-si">';
                echo $prio2;
                echo' </div> 
                  <div class="tbf-field-project-si">';
               echo $project2;
                 echo'</div> 
                  <div class="tbf-field-owner-si">';
                echo $owner2;
                 echo'</div> 
                 <div class="tbf-field-version-si">';
                echo $ver2;
                 echo'</div> 
                 <div class="tbf-field-status-si">';
                echo $stat2;
                 echo'</div> 
                 <div class="tbf-field-location-si">';
                echo $location2;
                 echo'</div> 
                
</div> 
</div> 

';
  
   
}
     
 }else{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($conn1);
}
  
  
    

  
  
}
?>