<?php
session_start();
function dispdoctypecatergorydd(){
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';

//$_SESSION['countryid']=0;

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql1 = "SELECT DISTINCT catergory, catid FROM document_type";

$result1 = $conn->query($sql1);
//$c=0;
echo'<div>';
echo'<form action=""> ';
echo' <select name="doctypecat" onchange="showDocumentcat(this.value)">';
echo' <option value="">DOCUMENT:</option>';
while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
   $catid= $row1["catid"];
   $doccatname= $row1["catergory"];
   
   
   echo'<option value="'; echo $catid; echo'">'; echo $doccatname; echo $catid; echo'</option>';
  
   // $c ++;
  
}
echo'</select>';
echo'</form>';
echo'</div>';
}

?>