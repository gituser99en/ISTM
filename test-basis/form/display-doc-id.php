<?php
session_start();

function dispdocid(){
    
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
<div class="di-field">
                <div class="di-field-label">
                Document Name
                 </div> 
                <div class="di-field-cont">
                p
                </div> 
</div> 
</div> 
<div class="flex-cont-la">
<div class="di-field">
                <div class="di-field-label">
                UID
                 </div> 
                <div class="di-field-cont">
                p
                </div> 
</div> 
</div> 
<div class="flex-cont-la">
<div class="di-field">
                <div class="di-field-label">
                Project
                 </div> 
                <div class="di-field-cont">
                p
                </div> 
</div> 
</div> 
<div class="flex-cont-la">
<div class="di-field">
                <div class="di-field-label">
                Version
                 </div> 
                <div class="di-field-cont">
                p
                </div> 
</div> 
</div> 
<div class="flex-cont-la">
<div class="di-field">
                <div class="di-field-label">
                Status
                 </div> 
                <div class="di-field-cont">
                p
                </div> 
</div> 
</div> 
<div class="flex-cont-la">
<div class="di-field">
                <div class="di-field-label">
                Effective Date
                 </div> 
                <div class="di-field-cont">
                p
                </div> 
</div> 
</div> 
<div class="flex-cont-la">
<div class="di-field">
                <div class="di-field-label">
                Owner
                 </div> 
                <div class="di-field-cont">
                p
                </div> 
</div> 
</div> 
';


    
}
?>