<?php
session_start();

function disptptitle($did, $tpid){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  $tpt = "Test Procedure: ";
  $tct = "Test Conditions: ";
  
 //connection
$conn1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
} 
 
//select
$sql2 = "SELECT * FROM test_procedure_title WHERE docid = '$did' AND tpid = '$tpid'";
$result2 = $conn1->query($sql2);
  

  
  //if mysqli query
 if(mysqli_query($conn1, $sql2)){
    // echo'sql ok';
   while($row1 = mysqli_fetch_array($result2)){
  // $etids[$c]= $row1["loginid"];
   
     
      $tpid= $row1["tpid"];
      $tclist= $row1["tclist"];
      $title= $row1["title"];
      
     
     echo'<div class="flex-cont-la">
<div class="tbf-field">
                <div class="tpt-field-procnum">';
                echo $tpt;
                echo $tpid;
                echo' </div> 
                 
                  <div class="tpt-field-tcs">';
                 echo $tct;
               echo $tclist;
                 echo'</div> 
                  <div class="tpt-field-title">';
           
                echo $title;
                echo' </div> 
               
                 
                
</div> 
</div> 

';
  
   
}
     
 }else{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($conn1);
}
  
  
    

  
  
}
?>