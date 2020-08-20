<?php
session_start();


    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
include $_SERVER['DOCUMENT_ROOT'].'/register/new-user.php';
//include 'new-user.php';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Now we check if the data from the login form was submitted, isset() will check if the data exists.
if ( !isset($_POST['email'], $_POST['upassword'], $_POST['name']) ) {
	// Could not get the data that should have been sent.
	die ('Please fill both the username and password field!');
}

$email = $_POST['email'];
$upassword = $_POST['upassword'];
$name = $_POST['name'];

$sql = "SELECT email FROM user WHERE email = ('$email')";
$result = mysqli_query($con, $sql);
if ($result->num_rows > 0) {
//if (mysqli_num_rows($result) == TRUE)
//{
//  echo'fail';
 // echo var_dump($email, $_POST['email'],$upassword, $_POST['upassword'],$name, $_POST['name']);
//results found
//header('Location: ../index.php');
} else {
// results not found
//  echo'newuser';
//echo var_dump($email, $_POST['email'],$upassword, $_POST['upassword'],$name, $_POST['name']);
echo new_user($_POST['name'], $_POST['email'], $_POST['upassword']); 
}

?>