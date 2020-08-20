<?php
//session_start();


function disptypedd(){
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';

//$_SESSION['countryid']=0;

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql1 = "SELECT name, uid FROM document_type";

$result1 = $conn->query($sql1);
  
  //if num rows
if ($result1->num_rows > 0) {
//$c=0;
//echo'<div>';
//echo'<form action=""> ';
echo' <select name="type" onchange="showCustomertype(this.value)">';
echo' <option value="">TYPE:</option>';
while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
   $tname= $row1["name"];
   $tuserid= $row1["uid"];
  // $locid= $row1["locationid"];
   
   
   echo'<option value="'; echo $tuserid; echo'">'; echo $tname; echo'</option>';
  
   // $c ++;
  
}
echo'</select>';
//echo'</form>';
//echo'</div>';
}else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}
}
?>