<?php
session_start();

function displayfieldtpt($did, $tpid){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
 //connection
$conn1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
} 
 
//select
$sql2 = "SELECT * FROM test_procedure_field_template WHERE did = '$did' AND tpid = '$tpid'";
$result2 = $conn1->query($sql2);
  

  
  //if mysqli query
 if(mysqli_query($conn1, $sql2)){
    // echo'sql ok';
   while($row1 = mysqli_fetch_array($result2)){
  // $etids[$c]= $row1["loginid"];
   
     
     // $tcid= $row1["tcid"];
      $step1= $row1["step"];
      $act1= $row1["action"];
      $er1= $row1["expected"];
      //$ar1= $row1["actual"];
     // $pf1= $row1["pf"];
     
     
  // $name2= $row2["name"];
  //   $uid2= $row2["uid"];
  //   $desc2= $row2["description"];
  //    $prio2= $row2["priority"];
  //   $project2= $row2["project"];
  //   $owner2= $row2["owner"];
  //   $ver2= $row2["ver"];
  //   $stat2= $row2["stat"];
  //   $location2= $row2["location"];
     
     echo'<div class="flex-cont-la">
<div class="tbf-field">
                <div class="tbf-field-step">';
                echo $step1;
                echo' </div> 
                 
                  <div class="tbf-field-description">';
               echo $act1;
                 echo'</div> 
                  <div class="tbf-field-er">';
                echo $er1;
                echo' </div> 
                  <div class="tbf-field-ar">';
              // echo $ar1;
                 echo'</div> 
                  <div class="tbf-field-pf">';
              //  echo $pf1;
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