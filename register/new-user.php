<?php
session_start();


function new_user($name, $email, $upassword){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
include 'get-loginid.php';  
  
  $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
  
  $sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$upassword')";
  
  if(mysqli_query($con, $sql)){
  	echo get_loginid($email);
  //  echo var_dump($email);
   
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
  
}
?>