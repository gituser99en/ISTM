<?php
session_start();

function submitdt($doctypeid){
    
//$gid = $_SESSION['groupid'];
//  $pid = $_SESSION['projectid'];
  $gid = $_SESSION['gid'];
  $pid = $_SESSION['pid'];
  $userid = $_SESSION['userid'];

//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql1 = "SELECT * FROM document_type WHERE id = '$doctypeid'";
$result1 = $conn->query($sql1);
 
  
  if(mysqli_query($conn, $sql1)){
  //   $_SESSION['scityid'] = $cityid;
     
     
     while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
   $dteid= $row1["id"];
        $dtname= $row1["name"];
     }
  
}
  $did = $dteid[0];
  $namea = $dtname[0];
  
 echo'<form action="/dev/generate-doc/subdoctemplate.php" method="post">';
echo'<input type="hidden" id="dtid" name="dtid" value="'; echo $did; echo'">';
echo'<input type="hidden" id="name" name="name" value="'; echo $namea; echo'">';
  echo'<input type="hidden" id="gid" name="gid" value="'; echo $gid; echo'">';
  echo'<input type="hidden" id="pid" name="pid" value="'; echo $pid; echo'">';
  echo'<input type="hidden" id="userid" name="userid" value="'; echo $userid; echo'">';
  echo'<input type="hidden" id="doctype" name="doctype" value="'; echo $doctypeid; echo'">';
echo' <input type="submit" value="Submit" >
</form>';
//header('Location:/dev/dropdown/blankdisppage.php');

}
?>