<?php
session_start();


//function new_project($name, $uid, $desc, $owner, $userid, $ownerid, $groupid, $password){

$name = $_POST['name'];
$uid = $_POST['uid'];
$desc = $_POST['desc'];
$owner = $_POST['owner'];
$userid = $_POST['userid'];
$ownerid = $_POST['ownerid'];
$groupid = $_POST['groupid'];
$ppassword = $_POST['password'];


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
$sql = "INSERT INTO project (name, uid, description, owner, userid, ownerid, groupid, password) VALUES ('$name', '$uid', '$desc', '$owner', '$userid', '$ownerid', '$groupid', '$ppassword')";



if(mysqli_query($con, $sql)){
    echo "Records added successfully.";
 
	
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}

//}
//$con->close();
?>