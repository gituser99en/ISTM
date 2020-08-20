<?php
session_start();

function displaysectiont($did){
    
$tpt = "Test Procedure: ";
  $tct = "Test Conditions: ";

//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-procedure/display-test-procedure-field-template.php';
 // include $_SERVER['DOCUMENT_ROOT'].'/test-condition/test-condition-example/display-test-condition-field.php';
  // include $_SERVER['DOCUMENT_ROOT'].'/test-condition/test-condition-example/display-test-condition-master-sub-field.php';
//   include $_SERVER['DOCUMENT_ROOT'].'/test-condition/test-condition-example/display-test-condition-master-sub-item-field.php';

// $msi = "SI";  
//  $subitemcount = '1'; 
//   $sip = ".";
 //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 
//select
$sql1 = "SELECT * FROM test_procedure_title WHERE docid ='$did'";
$result1 = $conn->query($sql1);
  

  
  //if mysqli query
 if(mysqli_query($conn, $sql1)){
    // echo'sql ok';
   while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
  /*    $tcid= $row1["tcid"];
      $step1= $row1["step"];
      $desc1= $row1["description"];
      $er1= $row1["expected"];
      $ar1= $row1["actual"];
      $pf1= $row1["pf"];
      $tpid= $row1["tpid"];
     
     */
      $tpid= $row1["tpid"];
      $tclist= $row1["tclist"];
      $title= $row1["title"];
     
     
  // $name1= $row1["name"];
   //  $uid1= $row1["uid"];
   //  $desc1= $row1["description"];
   //  $prio1= $row1["priority"];
  //   $project1= $row1["project"];
  //   $owner1= $row1["owner"];
  //   $ver1= $row1["ver"];
  //   $stat1= $row1["stat"];
  //   $location1= $row1["location"];
//echo disp-tp-title($did, $tpid);
     
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
     echo displayfieldtpt($did, $tpid);

  //   $uid3= $msi . $uid1;
  //   $uid4= $uid1 . $sip;
  //   $uid2 = $uid4 . $subitemcount;
     
    
    
    
//echo displayfield($uid1); 
    // echo displayfieldsi($uid2); 
    //  echo displayfieldsif($uid3); 
     
     // $subitemcount ++;
   
}
     
 }else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}
  
  
    

  
  
}
?>