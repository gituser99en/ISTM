<?php
session_start();

function dispmasterfield(){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
 //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
//select
$sql1 = "SELECT * FROM test_basis_master_field WHERE project ='ISTM'";
$result1 = $conn->query($sql1);
  

  
  //if mysqli query
 if(mysqli_query($conn, $sql1)){
    // echo'sql ok';
   while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
   $name1= $row1["name"];
     $uid1= $row1["uid"];
     $type1= $row1["type"];
     $project1= $row1["project"];
     $owner1= $row1["owner"];
     $ver1= $row1["ver"];
     $stat1= $row1["stat"];
     $location1= $row1["location"];
     
     echo'<div class="flex-cont-la">
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
  
   
}
     
 }else{
    echo "ERROR: Could not able to execute $sqlpv. " . mysqli_error($connpv);
}
  
  
    

  
  
}
?>