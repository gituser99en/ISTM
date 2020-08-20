<?php
session_start();

function displayfield($did, $suid){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
 //connection
$conn1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
} 
 
//select
$sql2 = "SELECT * FROM test_basis_field WHERE dtid = '$did' AND uid LIKE '$suid%'";
$result2 = $conn1->query($sql2);
  

  
  //if mysqli query
 if(mysqli_query($conn1, $sql2)){
    // echo'sql ok';
   while($row2 = mysqli_fetch_array($result2)){
  // $etids[$c]= $row1["loginid"];
   $id2 = $row2["id"];
   $name2= $row2["name"];
     $uid2= $row2["uid"];
     $type2= $row2["type"];
     $project2= $row2["project"];
     $owner2= $row2["owner"];
     $ver2= $row2["ver"];
     $stat2= $row2["stat"];
     $location2= $row2["location"];
     
     echo'<div class="flex-cont-la">
<div class="tbf-field">
  <div class="tbf-field-uid">';
                echo $id2;
                echo' </div> 
                <div class="tbf-field-name">';
                echo $name2;
                echo' </div> 
                  <div class="tbf-field-uid">';
                echo $uid2;
                echo' </div> 
                  <div class="tbf-field-type">';
               echo $type2;
                 echo'</div> 
                  <div class="tbf-field-project">';
               echo $project2;
                 echo'</div> 
                  <div class="tbf-field-owner">';
                echo $owner2;
                 echo'</div> 
                 <div class="tbf-field-version">';
                echo $ver2;
                 echo'</div> 
                 <div class="tbf-field-status">';
                echo $stat2;
                 echo'</div> 
                 <div class="tbf-field-location">';
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