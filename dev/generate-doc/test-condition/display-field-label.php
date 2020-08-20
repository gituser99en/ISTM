<?php
//session_start();

function dispfieldlabel(){
    
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
<div class="tbf-field">
 <div class="tbf-field-label-uid">
                ID
                 </div> 
                <div class="tbf-field-label-name">
                NAME
                 </div> 
                  <div class="tbf-field-label-uid">
                UID
                 </div> 
                  <div class="tbf-field-label-desc">
                DESCRIPTION
                 </div> 
                  <div class="tbf-field-label-priority">
                PRIORITY
                 </div> 
                  <div class="tbf-field-label-project">
                PROJECT
                 </div> 
                  <div class="tbf-field-label-owner">
                OWNER
                 </div> 
                 <div class="tbf-field-label-version">
                VER
                 </div> 
                 <div class="tbf-field-label-status">
                STAT
                 </div> 
                 <div class="tbf-field-label-location">
                LOCATION
                 </div> 
                
</div> 
</div> 

';


    
}
?>