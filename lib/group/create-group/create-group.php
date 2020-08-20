<?php
session_start();


//function new_group($name, $uid, $desc, $owner, $userid, $ownerid, $password){

$name = $_POST['name'];
$uid = $_POST['uid'];
$desc = $_POST['desc'];
$owner = $_POST['owner'];
$userid = $_POST['userid'];
$ownerid = $_POST['ownerid'];
//$groupid = $_POST['groupid'];
$ppassword = $_POST['ppassword'];


include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
include $_SERVER['DOCUMENT_ROOT'].'/lib/group/create-group/setusergroupid.php';

// Try and connect using the info above.
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
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

 $last_id = 0;
// Attempt insert query execution
$sql1 = "INSERT INTO groups (name, uid, description, owner, userid, ownerid, password) VALUES ('$name', '$uid', '$desc', '$owner', '$userid', '$ownerid', '$ppassword')";
$result1 = $conn->query($sql1);
$last_id = $conn->insert_id;
$tpeoffset = 0;
if($last_id !== 0){
   // echo "Records added successfully.";
 setusergroupid($userid, $last_id); 
	 header("Location:/dev/generate-doc/home/callpagehome.php?userid=$userid&tpeoffset=$tpeoffset");
} else{
    echo "ERROR: Could not able to execute $sql1. " . mysqli_error($conn);
}
//}
//}
//$con->close();
?>