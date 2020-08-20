<?php
session_start();

//include 'new_user.php';

include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
// Change this to your connection info.
//$DATABASE_HOST = 'localhost';
//$DATABASE_USER = 'u230358977_ytus';
//$DATABASE_PASS = 'eSuhuvypuP';
//$DATABASE_NAME = 'u230358977_ytus';
// Try and connect using the info above.
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['email'], $_POST['issue']) ) {
	// Could not get the data that should have been sent.
	die ('Please fill both the username and password field!');
}

$email = $_POST['email'];
$issue = $_POST['issue'];


//$email = mysqli_real_escape_string($con, $_REQUEST['email']);
//$password = mysqli_real_escape_string($con, $_REQUEST['password']);

$sql = "INSERT INTO support (email, issue) VALUES ('$email', '$issue')";
//$result = $con->query($sql);


if(mysqli_query($con, $sql)){
   $msg = "Support issue submitted";
   mail("eric.neilson.email@gmail.com","Support",$msg);
	
	header('Location: http://www.istm.online/support/');
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}






//$con->close();
?>