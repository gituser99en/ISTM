<?php
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

$_SESSION['uprojid'] = "1";

$_SESSION['projectid'] = "1";
$_SESSION['groupid'] = "1";
$_SESSION['pid'] = "1";
$_SESSION['gid'] = "1";
$_SESSION['userid'] = "1";
$_SESSION['username'] = "Eric Neilson";
?>



<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>ISTM INDEPENDENT SOFTWARE TESTING MODEL</title>
  <meta name="description" content="ISTM INDEPENDENT SOFTWARE TESTING MODEL - SOFTWARE TESTING PORTAL AND RESOURCES">
  <meta name="Eric Neilson" content="Eric Neilson">

  <link rel="stylesheet" href="istm.css?v=1.0">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
   <!--HEAD SCIPTS-->
   <script>
function showDocument(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "tka.php?q="+str, true);
  xhttp.send();
}
  </script>
 <!-- <script src="js/scripts.js"></script>-->
</head>

<body>
    <!--TOP SCIPTS-->
  
   <!--CONTENT--> 
   
<!--HEADER TOPNAV H1--> 
<div class="flex-cont">
<div>

<div class="dropdown">
<button class="dropbtn">ISTM</button>
<div class="dropdown-content">
 <a href="http://www.istm.online/register/">Register</a>
<a href="http://www.istm.online/login/">Login</a>
 
<!--  <a href="http://www.istm.online/login/">Buy</a>-->
  <a href="http://www.istm.online/software-testing-artifacts/">ISTM Artifacts</a>
  <a href="http://www.istm.online/test-basis/test-basis-exmaple/test-basis.php">Test Basis Example</a>
   <a href="http://www.istm.online/test-condition/test-condition-exmaple/test-condition.php">Test Condition Example</a>
   <a href="http://www.istm.online/test-procedures/test-procedures-exmaple/test-procedures.php">Test Procedures Example</a>
</div>
</div>
<!--<div class="dropdown">
<button class="dropbtn">LOGIN</button>
<div class="dropdown-content">

<a href="http://www.istm.online/login/">Login</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">REGISTER</button>
<div class="dropdown-content">

 <a href="http://www.istm.online/register/">Register</a>
</div>
</div>
-->
<div class="dropdown">
<button class="dropbtn">SOFTWARE TESTING</button>
<div class="dropdown-content">

<a href="http://www.istm.online/software-testing-fundamentals/">Fundamentals</a>
<a href="http://www.istm.online/software-testing-life-cycle/">Life Cycle</a>
<a href="http://www.istm.online/software-testing-test-levels/">Test Levels</a>
 <a href="http://www.istm.online/software-testing-test-types/">Test Types</a>
<a href="http://www.istm.online/software-testing-test-design/">Test Design</a>
  <a href="http://www.istm.online/software-testing-static-techniques/">Static</a>
<a href="http://www.istm.online/software-testing-test-management/">Test Management</a>
  <a href="http://www.istm.online/software-testing-metrics/">Test Metrics</a>
  <a href="http://www.istm.online/software-testing-artifacts/">Artifacts</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">LINKS</button>
<div class="dropdown-content">

 <!-- <a href="http://www.istm.online/messages/page-under-construction.php">Links</a>-->
  <a href="http://www.istm.online/software-testing-links/">Links</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">TOOLS</button>
<div class="dropdown-content">
<a href="http://www.istm.online/messages/page-under-construction.php">Tools</a>
<!--<a href="http://www.istm.online/software-testing-tools/">Tools</a>-->
</div>
</div>
<div class="dropdown">
<button class="dropbtn">ISTM DOWNLOADS</button>
<div class="dropdown-content">
<a href="http://www.istm.online/software-testing-downloads/">ISTM Downloads</a>
<!--<a href="http://www.istm.online/software-testing-downloads/">Downloads</a>-->
</div>
</div>
  
  <div class="dropdown">
<button class="dropbtn">HOME</button>
<div class="dropdown-content">

<a href="http://www.istm.online/login/">Login</a>
  <a href="http://www.istm.online/register/">Register</a>
  <a href="http://www.istm.online/home/">Home</a>
  <a href="http://www.istm.online/">Index</a>
 
</div>
</div>
</div> 
</div>     
</div>


<div class="header">   
	<div class="headerimg">
		<img alt="ISTM INDEPENDENT SOFTWARE TESTING MODEL"  img src="../inc/img/ISTM350.jpg" >
	</div> 
</div> 

<div class="flex-cont">
<h1>ISTM INDEPENDENT SOFTWARE TESTING MODEL</h1> 
</div> 

<div class="flex-cont">
<?php
include $_SERVER['DOCUMENT_ROOT'].'/dev/time-keeping/totaltime.php';
  include $_SERVER['DOCUMENT_ROOT'].'/dev/time-keeping/tkactivitydd.php';
echo totaltime();
?>
</div> 
  <div class="flex-cont">
<?php
include $_SERVER['DOCUMENT_ROOT'].'/dev/time-keeping/totaltimebyuser.php';
echo totaltimebu();
?>
</div> 
   <div class="flex-cont">
<?php
include $_SERVER['DOCUMENT_ROOT'].'/dev/time-keeping/totaltimebyuserbyactivity.php';
echo totaltimebuba();
?>
</div> 
    <div class="flex-cont">
<?php
include $_SERVER['DOCUMENT_ROOT'].'/dev/time-keeping/viewtimekeepingbyuser.php';
echo viewtkbu();
?>
</div> 

    <div class="flex-cont1" style="
    width: 49%;
    float: left;
">
<?php
include $_SERVER['DOCUMENT_ROOT'].'/dev/time-keeping/viewtimekeepingbyuser1.php';
echo viewtkbu1();
?>
</div> 
    <div class="flex-cont1"style="
    width: 49%;
    float: right;
">
<?php
//include $_SERVER['DOCUMENT_ROOT'].'/dev/time-keeping/viewtimekeepingbyuser1.php';
echo viewtkbu1();
?>

</div> 
<div class="flex-cont">
<br></br><br></br><br></br><br></br><br></br>
</div> 

<div class="flex-cont">
<form action="subtkrform.php" method="post">
  <label for="gid">GID:</label><br>
  <input type="text" id="gid" name="gid" ><br>
   <label for="pid">PID:</label><br>
  <input type="text" id="pid" name="pid" ><br>
   <label for="uid">UID:</label><br>
  <input type="text" id="userid" name="userid" ><br>
   <label for="unid">User Name:</label><br>
  <input type="text" id="uusername" name="uusername" ><br>
   <label for="activity">Activity:</label><br>
  <input type="text" id="activity" name="activity" ><br>
  <label for="lname">Time In Minutes:</label><br>
  <input type="text" id="timeinmin" name="timeinmin" ><br><br>
  <input type="submit" value="Submit">
</form> 
</div> 

<div class="flex-cont1">
<br></br><br></br><br></br><br></br><br></br>
</div> 
<?php
echo'<div class="flex-cont">
<form action="subtkrform.php" method="post">
  <label for="gid">GID:</label><br>
  <input type="text" id="gid" name="gid" value="';echo $_SESSION['gid'];echo'"><br>
   <label for="pid">PID:</label><br>
  <input type="text" id="pid" name="pid" value="';echo $_SESSION['pid'];echo'" ><br>
   <label for="uid">UID:</label><br>
  <input type="text" id="userid" name="userid" value="';echo $_SESSION['userid'];echo'" ><br>
   <label for="unid">User Name:</label><br>
  <input type="text" id="uusername" name="uusername" value="';echo $_SESSION['username'];echo'" ><br>
   <label for="activity">Activity:</label><br>';
echo tkactivitydd();
echo'<div id="txtHint">
</div>';
//echo'
 // <input type="text" id="activity" name="activity" value="';echo'" ><br>';
//  echo'<br>
//  <label for="lname">Time In Minutes:</label><br>
//  <input type="text" id="timeinmin" name="timeinmin" ><br><br>
//  <input type="submit" value="Submit">
//echo'
//</form> 
//</div> ';
echo'

</div> ';
?>


<div class="flex-cont1">
<br></br><br></br><br></br><br></br><br></br>
</div> 
<div class="flex-cont1">
<br></br><br></br><br></br><br></br><br></br>
</div> 

<div class="flex-cont-fn">
<div class="dropup">
  <button class="dropupbtn">SUPPORT</button>
  <div class="dropup-content">
    <a href="http://www.istm.online/support/">SUPPORT</a>
  </div>

</div>
<div class="dropup">
  <button class="dropupbtn">ABOUT</button>
  <div class="dropup-content">
    <a href="http://www.istm.online/about/">ABOUT</a>
  </div>

</div>
<div class="dropup">
  <button class="dropupbtn">CONTACT</button>
  <div class="dropup-content">
    <a href="http://www.istm.online/support/">CONTACT</a>
  
  </div>
   </div>
  
  <div class="dropup">
  <button class="dropupbtn">HOME</button>
  <div class="dropup-content">
  <a href="http://www.istm.online/">ISTM</a>
  <a href="http://www.istm.online/home/">Home</a>
  </div>
   </div>
  

<!--
<div class="dropup">
  <button class="dropupbtn">JOBS</button>
  <div class="dropup-content">
   <a href="http://www.istm.online/software-testing-jobs/">JOBS</a>
  </div>

</div>
-->
<div class="dropup">
  <button class="dropupbtn">POLICY</button>
  <div class="dropup-content">
   <a href="http://www.istm.online/policy/">COOKIES</a>
     <a href="http://www.istm.online/policy/">PRIVACY</a>
     <a href="http://www.istm.online/policy/">TOS</a>
  </div>

</div>
<div class="dropup">
  <button class="dropupbtn">SITEMAP</button>
  <div class="dropup-content">
   <a href="http://www.istm.online/sitemap/">SITEMAP</a>
  </div>

</div>

</div>

<!-- <script src="js/scripts.js"></script>-->
</body>
</html>