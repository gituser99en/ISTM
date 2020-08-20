<?php
session_start();

//function dispdoctemp($did, $dname){

//include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-basis/test-basis-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-basis-create-docid.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-condition-create-docid.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-procedure-create-docid.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-procedure-template-create-docid.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-analysis-create-docid.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/Development-analysis-create-docid.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/company-analysis-create-docid.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/project-analysis-create-docid.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/submission-analysis-create-docid.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/incident-form-create-docid.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/time-keeping-create-docid.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-report-create-docid.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-plan-create-docid.php';
    
$did = $_POST['dtid'];
$gid = $_POST['gid'];
$pid = $_POST['pid'];
$userid = $_POST['userid'];
$doctypename = $_POST['name'];
$doctypeid = $_POST['doctype'];

switch ($did) {
    case "1":
    echo tbcdid($userid, $gid, $pid, $did, $doctypename, $doctypeid);
    //echo disptestbasis($userid, $did, $gid, $pid, $docname);
        // header('Location:document-template.php');
        break;
    case "2":
        echo tccdid($userid, $gid, $pid, $did, $doctypename, $doctypeid);
        break;
     case "3":
        echo tpcdid($userid, $gid, $pid, $did, $doctypename, $doctypeid);
        break;
   case "4":
        echo tacdid($userid, $gid, $pid, $did, $doctypename, $doctypeid);
        break;
    case "5":
        echo pacdid($userid, $docidentifier, $gid, $pid, $docname, $doctypeid);
        break;
    case "10":
        echo tplcdid($userid, $gid, $pid, $did, $doctypename, $doctypeid);
        break;
      case "12":
        echo dacdid($userid, $docidentifier, $gid, $pid, $docname, $doctypeid);
        break;
       case "13":
        echo cacdid($userid, $docidentifier, $gid, $pid, $docname, $doctypeid);
        break;
       case "14":
        echo sacdid($userid, $docidentifier, $gid, $pid, $docname, $doctypeid);
        break;
    case "17":
        echo ifcdid($userid, $docidentifier, $gid, $pid, $docname, $doctypeid);
        break;
    case "18":
        echo tkcdid($userid, $docidentifier, $gid, $pid, $docname, $doctypeid);
        break;
     case "20":
        echo trcdid($userid, $docidentifier, $gid, $pid, $docname, $doctypeid);
        break;
     case "21":
        echo tptcdid($userid, $gid, $pid, $did, $doctypename, $doctypeid);
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