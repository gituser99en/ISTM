<?php
session_start();


//function new_project($doctype, $doctypeid, $name, $uid, $desc, $owner, $userid, $ownerid, $groupid, $password){
//$_SESSION['groupid'] = '1';
//$_SESSION['projectid'] = '1';
//$_SESSION['doctypeid'] = '1';
//$_SESSION['doctypename'] = 'Test Basis';
//$_SESSION['userid'] = '1';


//$gid = $_SESSION['groupid'];
//$pid = $_SESSION['projectid'];
//$dtid = $_SESSION['doctypeid'];
//$dtname = $_SESSION['doctypename'];
//$userid = $_SESSION['userid'];

$gid = $_POST['gid'];
$pid = $_POST['pid'];
$userid = $_POST['userid'];
$dtid = $_POST['dtid'];
$dtname = $_POST['dtname'];
$doctypeid = $_POST['doctype'];
$tptid = $_POST['tptid'];

$name = $_POST['name'];
$uid = $_POST['uid'];
$project = $_POST['project'];
$version = $_POST['version'];
$status = $_POST['status'];
$effective = $_POST['effective'];
//$desc = $_POST['desc'];
$owner = $_POST['owner'];
//$userid = $_POST['userid'];
//$doctype = $_POST['doctype'];
//$doctypeid = $_POST['doctypeid'];
//$ownerid = $_POST['ownerid'];
//$groupid = $_POST['groupid'];
//$ppassword = $_POST['password'];
$sourcename = $_POST['sourcename'];
$sourceuid = $_POST['sourceuid'];
$tcc = $_POST['tcc'];


include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-basis/test-basis-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-procedure/insert-tp-info.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-procedure/insert-tpe-info.php';

// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Now we check if the data from the login form was submitted, isset() will check if the data exists.
//if ( !isset($_POST['email'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	//die ('Please fill both the username and password field!');
//}
//ql = "INSERT INTO Login (email, password)VALUES ('$email',$password')";
// Escape user inputs for security
//$email = mysqli_real_escape_string($con, $_REQUEST['email']);
//$password = mysqli_real_escape_string($con, $_REQUEST['password']);

 
// Attempt insert query execution

$sql = "INSERT INTO document_id (gid, pid, userid, name, uid, project, ver, stat, effective, owner, doctypeid, doctypename) VALUES ('$gid', '$pid', '$userid', '$name', '$uid',  '$project', '$version', '$status', '$effective', '$owner', '$doctypeid', '$dtname')";



if(mysqli_query($con, $sql)){
   // echo "Records added successfully.";
 $last_id = $con->insert_id;
  echo instpinf($sourcename, $sourceuid, $tcc, $gid, $pid, $last_id);
  echo instpeinf($gid, $pid, $last_id, $tptid);
 // echo disptestbasis($userid, $last_id, $gid, $pid, $name);
 // header('Location: /dev/generate-doc/test-basis/test-basis-doc.php?userid='.$userid.'&docidentifier='.$last_id.'&gid='.$gid.'&pid='.$pid.'&docname='.$name.'');
	//echo'<a href="callpage.php?userid=' . $userid . '&docidentifier=' . $last_id . '&gid=' . $gid . '&pid=' . $pid . ' &docname=' . $name . '">NEXT</a>';
   header('Location: /dev/generate-doc/callpage.php?userid='.$userid.'&docidentifier='.$last_id.'&gid='.$gid.'&pid='.$pid.'&docname='.$name.'&doctype='.$doctypeid.'&tptid='.$tptid.'');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

//}
//$con->close();
?>