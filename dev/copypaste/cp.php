<?php
session_start();

function dispcitydd($cid, $rid){
    
}

//includes
include $_SERVER['DOCUMENT_ROOT'].'/includes/db.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/includes/db.php';

//connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
$sql1 = "SELECT DISTINCT locationname, locationid FROM aaxlocations WHERE locationid LIKE '$ls1' LIMIT 49  OFFSET 1";
$result1 = $conn->query($sql1);

//innerjoin
$sqlet = "SELECT DISTINCT aaxescortdetails.loginid, aaximg.imgurl FROM aaxescortdetails INNER JOIN aaximg ON aaxescortdetails.loginid = aaximg.loginid WHERE aaxescortdetails.etype =('$et') AND aaxescortdetails.loginid IN ($eidstring)";

//update
$sql = "UPDATE ad_number SET stage = '$stage' WHERE loginid = '$loginid' AND ad_number = '$adnum'";

//insert
$sql = "INSERT INTO ad_stage_loc (loginid, ad_number, stage, url) VALUES ('$loginid', '$adnum', '$stage', '$url')";

//sql session variable
$sql = "INSERT INTO aaxcontact (loginid, telephone, email, whatsapp, skype, website, twitter) VALUES ('{$_SESSION['loginid']}','$tel', '$email', '$whatsapp', '$skype', '$website', '$twitter')";

//if mysqli query
 if(mysqli_query($connpv, $sqlpv)){
     echo'sql ok';
     
 }else{
    echo "ERROR: Could not able to execute $sqlpv. " . mysqli_error($connpv);
}

//if num rows
if ($result->num_rows > 0) {
    
    
//affe4cted rows
// Perform queries and print out affected rows
mysqli_query($con, "SELECT * FROM Persons");
echo "Affected rows: " . mysqli_affected_rows($con);

//while array
while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
   $locname1= $row1["locationname"];
   
}

//while assoc
 while($row = $result->fetch_assoc()) {
     
     
//fetch object
if ($result = mysqli_query($con, $sql)) {
  while ($obj = mysqli_fetch_object($result)) {
    printf("%s (%s)\n", $obj->Lastname, $obj->Age);
  }
  mysqli_free_result($result);
}


//isset post
if ( !isset($_POST['email'], $_POST['password']) ) {
	// Could not get the data that should have been sent.
	die ('Please fill both the username and password field!');
}

$lid = $_POST['lid'];

//call page
echo'<a href="callpage.php?link=' . $wherestring . '&os=' . $pages . '&numres=' . $numres1 . '&et=' . $et . '">NEXT</a>';


//hide show div
if($numres1 < '10'){
  $divStyle='style="display:none;"'; //hide div
 
}else{
    $divStyle='style="display:block;"';
}

echo '<div class="row">';
echo '<div ' . $divStyle . '>';

//echo function
echo displaylocation($eid);

echo new_user($_POST['nickname'], $_POST['email'], $_POST['password']); 

//header
header('Location:../../home/home.php'); 

//session
$_SESSION['loggedin'];

//implode
$etidstest = implode(', ', $etids);

//count
count($locationid);

//escape string
$tel = mysqli_real_escape_string($con, $_REQUEST['Tel']);

//json
$counter = 0;
$i = 0;
$path = "/";
	$ext = ".php";
	$conts = 0;
	$contl = 0;
	$loc = 'string';
	$tloc = 'string';

$data = file_get_contents( 'id6northeast.json' );

$tdata = str_replace(' ', '', $data);

$jsoncnf = json_decode($data);
$jsoncnt = json_decode($tdata);


echo'<div class=region-links><br><div class=h3rep><h3>'; echo $_SESSION['awregion']; echo' ESCORTS';    echo'</h3></div>';

while($i < 100){
    
    		if ($conts ==0)
{echo'<div class="search">';
}
$conts++;

if ($contl <6){
    
   // $loc = $jsoncn[$counter]->{'CountyName'};
  //  $tloc = $jsoncnt[$counter]->{'CountyName'};
  // $tloc = implode($jsoncn[$counter]->{'CountyName'});
   // trim ($tloc);
    //echo $loc;
    //echo $tloc;
     $loc = $jsoncnf[$counter]->{'CountyName'};
      $tloc = $jsoncnt[$counter]->{'CountyName'};

echo'<div class="aw-link-div"><a href=https://www.freeescortads.site/aw/ne/';  echo$tloc; echo$ext; echo'>'; echo$loc; echo'</a></div>';

}
$contl++;



if ($conts == 6){
echo'</div>';
echo'</div>';
$conts = 0;
$contl = 0;
}
	
//echo $jsoncn[$counter]->{'CountyName'};
$i++;
$counter++;


if(empty($jsoncnf[$counter])){
        $i = 101;
    }
}
echo'</div>';

//stmt
if ($stmt = $con->prepare('SELECT loginid, password FROM aaxlogin WHERE email = ?')) {
	// Bind parameters (s = string, i = int, b = blob, etc), in our case the username is a string so we use "s"
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	// Store the result so we can check if the account exists in the database.
	$stmt->store_result();
}
if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
	// Account exists, now we verify the password.
	// Note: remember to use password_hash in your registration file to store the hashed passwords.
	// if (password_verify($_POST['password'], $password)) {
		if ($_POST['password'] === $password) {
		// Verification success! User has loggedin!
		// Create sessions so we know the user is logged in, they basically act like cookies but remember the data on the server.
		session_regenerate_id();
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['email'];
		//$_SESSION['nickname'] = $_POST['nickname'];
		$_SESSION['loginid'] = $id;
		//$_SESSION['escortid'] = $id;
	//	$_SESSION['regionid'] = return_regionid($id);
		header('Location:/home/home.php');//echo 'Welcome ' . $_SESSION['name'] . '!';
	} else {
		echo 'Incorrect password!';
	}
} else {
	echo 'Incorrect username!';
}
$stmt->close();

//last insert id
$last_id = $conn->insert_id;

//session initiation
if (!isset($_SESSION['loggedin']))
{
  $_SESSION['loggedin'] = "0";
}
if (!isset($_SESSION['loginid']))
{
  $_SESSION['loginid'] = "null";
}
if (!isset($_SESSION['consent']))
{
  $_SESSION['consent'] = "0";
}
if (!isset($_SESSION['IP_ADDR']))
{
  $_SESSION['IP_ADDR'] = "null";;
}

//tables
if(mysqli_query($conn, $sql)){
  
  echo "<table class='contacttable'; width='100%'>";
echo "<caption style='color: #9370DB'>CREDITS DETAILS</caption>";


while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<th width='50%'>Login ID</th>";
echo "<td align=center>" . $row['loginid'] .  "</td>";

echo "</tr>";

echo "<tr class='space'>";
//echo "<th width='50%'></th>";
//echo "<td align=center>''</td>";

echo "</tr>";

echo "<tr>";
echo "<th width='50%'>Total Credits</th>";
echo "<td align=center>" . $row['credits'] .  "</td>";

echo "</tr>";

echo "<tr class='space'>";
//echo "<th width='50%'></th>";
//echo "<td align=center>''</td>";

echo "</tr>";

echo "<tr>";
echo "<th width='50%'>Transaction Type</th>";
echo "<td align=center>" . $row['transactiontype'] .  "</td>";

echo "</tr>";

echo "<tr class='space'>";
//echo "<th width='50%'></th>";
//echo "<td align=center>''</td>";

echo "</tr>";

echo "<tr>";
echo "<th width='50%'>Transaction Number</th>";
echo "<td align=center>" . $row['transactionnumber'] .  "</td>";

echo "</tr>";

echo "<tr class='space'>";
//echo "<th width='50%'></th>";
//echo "<td align=center>''</td>";

echo "</tr>";

echo "<tr>";
echo "<th width='50%'>Transaction ID</th>";
echo "<td align=center>" . $row['tid'] .  "</td>";

echo "</tr>";


}
echo "</table>";
    
  
   // echo "querey fine";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


//rows table
if(mysqli_query($conn, $sql)){
  
  echo "<table class='purchasetable'; width='100%'>";
echo "<caption style='color: #9370DB'>AD PURCHASE DETAILS</caption>";

echo "<th width='5%'>AD ID</th>";
echo "<th width='5%'>Login ID</th>";
echo "<th width='15%'>Name</th>";
echo "<th width='20%'>Status</th>";

echo "<th width='35%'>Purchase Date</th>";
echo "<th width='5%'>Weeks</th>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";

echo "<td align=center>" . $row['adid'] .  "</td>";

echo "<td align=center>" . $row['loginid'] .  "</td>";

//echo "</tr>";

//echo "<tr class='space'>";
//echo "<th width='50%'></th>";
//echo "<td align=center>''</td>";

//echo "</tr>";

//echo "<tr>";

echo "<td align=center>" . $row['name'] .  "</td>";


echo "<td align=center>" . $row['status'] .  "</td>";


echo "<td align=center>" . $row['submitdate'] .  "</td>";


echo "<td align=center>" . $row['weeks'] .  "</td>";



echo "</tr>";


}
echo "</table>";
    
  
   // echo "querey fine";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


//forms
<div style="justify-content:center;display:flex"><div class="login"><h3>REGISTER</h3><form action="verify_user.php" method="post"><label for="nickname">ENTER NICKNAME</label><input type="text" name="nickname" placeholder="Nickname" id="nickname" required><label for="username">ENTER EMAIL</label><input type="text" name="email" placeholder="Email" id="email" required><label for="password">ENTER PASSWORD</label><input type="password" name="password" placeholder="Password" id="password" required><input type="submit" value="REGISTER"></form></div></div><br><div><br><br><br><br><br></div> </div>


?>