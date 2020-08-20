<?php
session_start();

include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';

//include 'regionid.php';
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
if ( !isset($_POST['email'], $_POST['upassword']) ) {
	// Could not get the data that should have been sent.
	die ('Please fill both the username and password field!');
}
// Prepare our SQL, preparing the SQL statement will prevent SQL injection.
if ($stmt = $con->prepare('SELECT id, password, name FROM user WHERE email = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
}
if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password, $name);
	$stmt->fetch();
	// Account exists, now we verify the password.
	// Note: remember to use password_hash in your registration file to store the hashed passwords.
	// if (password_verify($_POST['password'], $password)) {
		if ($_POST['upassword'] === $password) {
		// Verification success! User has loggedin!
		// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['email'] = $_POST['email'];
		//$_SESSION['nickname'] = $_POST['nickname'];
		$_SESSION['loginid'] = $id;
          $_SESSION['userid'] = $id;
          $_SESSION['name'] = $name;
          $tpeoffset = 0;
		//$_SESSION['escortid'] = $id;
	//	$_SESSION['regionid'] = return_regionid($id);
		//header('Location:/home/home.php');//echo 'Welcome ' . $_SESSION['name'] . '!';
           header("Location:/dev/generate-doc/home/callpagehome.php?userid=$id&tpeoffset=$tpeoffset");
	} else {
		echo 'Incorrect password!';
	}
} else {
	echo 'Incorrect username!';
}
$stmt->close();
?>