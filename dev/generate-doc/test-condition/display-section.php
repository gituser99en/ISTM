<?php
session_start();

function displaysection($di){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-condition/display-test-condition-field.php';
  // include $_SERVER['DOCUMENT_ROOT'].'/test-condition/test-condition-example/display-test-condition-master-sub-field.php';
 //  include $_SERVER['DOCUMENT_ROOT'].'/test-condition/test-condition-example/display-test-condition-master-sub-item-field.php';

 $msi = "SI";  
  $subitemcount = '1'; 
   $sip = ".";
 //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
//select
$sql1 = "SELECT * FROM test_condition_master_field WHERE docident ='$di'";
$result1 = $conn->query($sql1);
  

  
  //if mysqli query
 if(mysqli_query($conn, $sql1)){
    // echo'sql ok';
   while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   $id1= $row1["id"];
   $name1= $row1["name"];
     $uid1= $row1["uid"];
     $desc1= $row1["description"];
     $prio1= $row1["priority"];
     $project1= $row1["project"];
     $owner1= $row1["owner"];
     $ver1= $row1["ver"];
     $stat1= $row1["stat"];
     $location1= $row1["location"];

     echo'<div class="flex-cont-la">
<div class="tbf-field-mi">
                  <div class="tbf-field-uid">';
                echo $id1;
                echo' </div>
                <div class="tbf-field-name">';
                echo $name1;
                echo' </div> 
                  <div class="tbf-field-uid">';
                echo $uid1;
                echo' </div> 
                  <div class="tbf-field-description">';
               echo $desc1;
                 echo'</div> 
                  <div class="tbf-field-priority">';
                echo $prio1;
                echo' </div> 
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

    // $uid3= $msi . $uid1;
    // $uid4= $uid1 . $sip;
   //  $uid2 = $uid4 . $subitemcount;
     
    
    
    
echo displayfield($di, $uid1); 
    // echo displayfieldsi($uid2); 
    //  echo displayfieldsif($uid3); 
     
     // $subitemcount ++;
   
}
     
 }else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}
  
  
    

  
  
}
?>