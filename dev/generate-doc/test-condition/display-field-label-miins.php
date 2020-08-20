<?php
//session_start();

function dispfieldlabelmiins(){
    
    //includes
include $_SERVER['DOCUMENT_ROOT'].'/includes/db.php';

//connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//} 

//select
//$sql1 = "SELECT DISTINCT locationname, locationid FROM aaxlocations WHERE locationid LIKE '$ls1' LIMIT 49  OFFSET 1";
//$result1 = $conn->query($sql1);

echo'
<div class="flex-cont-la">
<div class="tbf-field-mi">
                <div class="tbf-field-label-name-mi">
                NAME
                 </div> 
                  <div class="tbf-field-label-uid-mi">
                UID
                 </div> 
                  <div class="tbf-field-label-desc-mi">
                DESCRIPTION
                 </div> 
                  <div class="tbf-field-label-priority-mi">
                PRIORITY
                 </div> 
                  <div class="tbf-field-label-project-mi">
                PROJECT
                 </div> 
                  <div class="tbf-field-label-owner-mi">
                OWNER
                 </div> 
                 <div class="tbf-field-label-version-mi">
                VER
                 </div> 
                 <div class="tbf-field-label-status-mi">
                STAT
                 </div> 
                 <div class="tbf-field-label-location-mi">
                LOCATION
                 </div> 
                
</div> 
</div> 

';


    
}
?>