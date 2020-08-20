<?php
session_start();

function displayfieldtpe($dtid, $did, $tpid, $gid, $pid, $userid, $docname){
    
$doctypeid = 19;

//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
 //connection
$conn1 = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn1->connect_error) {
    die("Connection failed: " . $conn1->connect_error);
} 
 
//select

 $sql2 = "SELECT test_procedure_field_template.id, test_procedure_field_template.step, test_procedure_field_template.action, test_procedure_field_template.expected, test_procedure_field_template.tpid, test_procedure_field_execution.actual, test_procedure_field_execution.pf FROM test_procedure_field_template INNER JOIN test_procedure_field_execution ON test_procedure_field_template.id = test_procedure_field_execution.tfid WHERE test_procedure_field_template.did='$dtid' AND test_procedure_field_template.tpid='$tpid'

UNION

SELECT test_procedure_field_template.id, test_procedure_field_template.step, test_procedure_field_template.action, test_procedure_field_template.expected, test_procedure_field_template.tpid, test_procedure_field_execution.actual, test_procedure_field_execution.pf FROM test_procedure_field_template LEFT OUTER JOIN test_procedure_field_execution ON test_procedure_field_template.id = test_procedure_field_execution.tfid WHERE test_procedure_field_template.did='$dtid' AND test_procedure_field_template.tpid='$tpid'"; 
//$sql2 = "SELECT * FROM test_procedure_field_template WHERE did = '$dtid' AND tpid = '$tpid'";
$result2 = $conn1->query($sql2);
  

  
  //if mysqli query
 if(mysqli_query($conn1, $sql2)){
    // echo'sql ok';
   while($row1 = mysqli_fetch_array($result2)){
  // $etids[$c]= $row1["loginid"];
   
     
     $tfid= $row1["id"];
      $step1= $row1["step"];
      $act1= $row1["action"];
      $er1= $row1["expected"];
     $actual1= $row1["actual"];
     $pf1= $row1["pf"];
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
     
  echo'
<form action="/dev/generate-doc/test-procedure/create-tpe.php" method="post">
  <div class="flex-cont-la">
<div class="tbf-field">
                <div class="tbf-field-step">
                <input type="text" name="step"  id="step" value="';echo $step1;
                echo'" required>
                 </div> 
                  <div class="tbf-field-description">
                <input type="text" name="action" id="action" value="';echo $act1;
                echo'" required>
                 </div> 
                  <div class="tbf-field-er">
                <input type="text" name="expected" id="expected" value="';echo $er1;
                echo'" required>
                 </div> 
				 <div class="tbf-field-ar">
				 <input type="text" name="actual" id="actual" value="';echo $actual1;
                echo'" required>
                 </div> 
				 <div class="tbf-field-pf">
				 <input type="text" name="pf" id="pf" value="';echo $pf1;
                echo'" required>
                 </div> 
                  
                <input type="hidden" name="tpid"  id="tpid" value="';echo $tpid;
                echo'">
                 
                 <input type="hidden" id="tfid" name="tfid" value="'; echo $tfid; echo'">
                <input type="hidden" id="userid" name="userid" value="'; echo $userid; echo'">
  				<input type="hidden" id="docid" name="did" value="'; echo $did; echo'">
                <input type="hidden" id="groupid" name="gid" value="'; echo $gid; echo'">
  				<input type="hidden" id="projectid" name="pid" value="'; echo $pid; echo'">
                <input type="hidden" id="dtid" name="dtid" value="'; echo $dtid; echo'">
                <input type="hidden" id="dname" name="dname" value="'; echo $docname; echo'">
                <input type="hidden" id="doctypeid" name="doctypeid" value="'; echo $doctypeid; echo'">
                 <input type="submit" value="REGISTER">
</div> 
</div> 


</div> 
 
</form>
';

  
   
}
     
 }else{
    echo "ERROR: Could not able to execute $sql2. " . mysqli_error($conn1);
}
  
  
    

  
  
}
?>