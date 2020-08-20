<?php
session_start();


//function new_project($name, $uid, $desc, $owner, $userid, $ownerid, $groupid, $password){

$name = $_POST['name'];
$uid = $_POST['uid'];
$project = $_POST['project'];
$version = $_POST['ver'];
$status = $_POST['stat'];
//$effective = $_POST['effective'];
$desc = $_POST['description'];
$owner = $_POST['owner'];
$userid = $_POST['userid'];
$priority = $_POST['priority'];
//$ownerid = $_POST['ownerid'];
//$groupid = $_POST['groupid'];
//$ppassword = $_POST['password'];
//$type = $_POST['type'];
$location = $_POST['location'];
$docid = $_POST['docid'];
$gid =  $_POST['groupid'];
$pid =  $_POST['projectid'];
$dtid =  $_POST['dtid'];
$dname =  $_POST['dname'];
$doctypeid =  $_POST['doctype'];



include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';

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
$sql = "UPDATE test_condition_field SET name = '$name', uid = '$uid', description = '$desc', priority = '$priority', project = '$project', ver = '$version', stat = '$status', owner = '$owner', userid = '$userid', docid = '$doctypeid', location = '$location' WHERE uid = '$uid' AND docident = '$docid' ";



if(mysqli_query($con, $sql)){
    //echo "Records added successfully.";
 header("Location:/dev/generate-doc/callpage.php?userid=$userid&docidentifier=$docid&gid=$gid&pid=$pid&docname=$dname&doctype=$doctypeid");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

//}
//$con->close();
?>