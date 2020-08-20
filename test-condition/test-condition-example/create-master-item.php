<?php
session_start();


//function new_project($name, $uid, $desc, $owner, $userid, $ownerid, $groupid, $password){

$name = $_POST['name'];
$uid = $_POST['uid'];
$project = $_POST['project'];
$version = $_POST['ver'];
$status = $_POST['stat'];
//$effective = $_POST['effective'];
//$desc = $_POST['desc'];
$owner = $_POST['owner'];
$userid = $_POST['userid'];
//$ownerid = $_POST['ownerid'];
//$groupid = $_POST['groupid'];
//$ppassword = $_POST['password'];
//$type = $_POST['type'];
$location = $_POST['location'];
$docid = $_POST['docid'];
$desc1 = $_POST['description'];
$prio1 = $_POST['priority'];


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
$sql = "INSERT INTO test_condition_master_field (name, uid, project, ver, stat, owner, userid, docid, location, description, priority) VALUES ('$name', '$uid', '$project', '$version', '$status', '$owner', '$userid', '$docid', '$location' , '$desc1' , '$prio1')";



if(mysqli_query($con, $sql)){
    //echo "Records added successfully.";
 header('Location: test-condition.php');
	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

//}
//$con->close();
?>