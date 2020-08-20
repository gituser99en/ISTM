<?php
session_start();

//function dispdoctemp($did, $dname){


include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-procedure-execution-create-docid.php';
    
$did = $_POST['dtid'];
$gid = $_POST['gid'];
$pid = $_POST['pid'];
$userid = $_POST['userid'];
$doctypename = $_POST['name'];
$doctypeid = $_POST['doctype'];
$tptid = $_POST['tptid'];

switch (1) {
    case "1":
    echo tpecdid($userid, $gid, $pid, $did, $doctypename, $doctypeid, $tptid);
        break;
   
    default:
        echo "";
}

//includes
/*include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  $conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql1 = "SELECT * FROM document_template WHERE id = '$did'";
$result1 = $conn->query($sql1);
  
  if(mysqli_query($conn, $sql1)){
  //   $_SESSION['scityid'] = $cityid;
   //  echo'results';
   //  header('Location:document-template.php');
     while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
   $dtloc= $row1["location"];
     }
  $dttloc = $dtloc[0]; 
   header('Location:echo"$dttloc')";
  }else{
  echo'no results';
  }

 
//echo" header('Location:$dttloc')";
//  header('Location:document-template.php');
  
//}
*/
?>