<?php
//session_start();

function dispfieldmi(){
    
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
                <div class="tbf-field-name">
                Document Name Can be Long So Big Field
                 </div> 
                  <div class="tbf-field-uid">
                uid113456
                 </div> 
                  <div class="tbf-field-type">
                Type Business Specification
                 </div> 
                  <div class="tbf-field-project">
                Project Free Escort Ads
                 </div> 
                  <div class="tbf-field-owner">
                owner Eric Neilson
                 </div> 
                 <div class="tbf-field-version">
                version 1.2
                 </div> 
                 <div class="tbf-field-status">
                Status TBA
                 </div> 
                 <div class="tbf-field-location">
                c:\documents/specification\projects\fea\business spec version 1.doc
                 </div> 
                
</div> 
</div> 

';


    
}
?>