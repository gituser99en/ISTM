<?php
session_start();

function dispdocid(){
    
    //includes
include $_SERVER['DOCUMENT_ROOT'].'/inc//db/db.php';

//connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
$sql1 = "SELECT * FROM documentid WHERE uid = 'itbl1'";
$result1 = $conn->query($sql1);
  
  while($row1 = mysqli_fetch_array($result1)){

   
   $name= $row1["name"];
   



echo'
<div class="flex-cont-la">
<div class="di-field">
                <div class="di-field-label">
                Document Name
                 </div> 
                <div class="di-field-cont">';
               echo $name;
              echo'  </div> 
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

    
}
?>