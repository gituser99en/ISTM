<?php
session_start();
function dispdoctypebycatergorytptdd($pid){
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
$pid =1;
//$_SESSION['countryid']=0;

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql1 = "SELECT * FROM document_id WHERE pid ='$pid' AND doctypeid ='3'";

$result1 = $conn->query($sql1);
//$c=0;
echo'<div>';
echo'<form action=""> ';
echo' <select name="doctypebycat" onchange="showDocumentbycattpt(this.value)">';
echo' <option value="">DOCUMENT:</option>';
while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
   $id= $row1["id"];
   $name= $row1["name"];
   
   
   echo'<option value="'; echo $id; echo'">'; echo $name; echo $id; echo'</option>';
  
   // $c ++;
  
}
echo'</select>';
echo'</form>';
echo'</div>';
}

?>