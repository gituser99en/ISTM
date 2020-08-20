<?php
session_start();
function tkactivitydd(){
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';

//$_SESSION['countryid']=0;

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql1 = "SELECT * FROM time_keeping_activity";

$result1 = $conn->query($sql1);
//$c=0;
//echo'<div>';
//echo'<form action=""> ';
echo' <select name="doctype" onchange="showDocument(this.value)"style="
    border-color: rgb(110, 136, 169);
">';
echo' <option value="">ACTIVITY:</option>';
while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
   $aid= $row1["id"];
   $aname= $row1["name"];
   
  // echo'<input type="text" id="activity" name="activity" value="';echo $aname;echo'" ><br>';
  // echo'<input type="hidden" id="activityid" name="activityid" value="';echo $aid;echo'" ><br>';
   echo'<option value="'; echo $aid; echo'">'; echo $aname; echo $aid; echo'</option>';
  
   // $c ++;
  
}
echo'</select>';
//echo'</form>';
//echo'</div>';
}

?>