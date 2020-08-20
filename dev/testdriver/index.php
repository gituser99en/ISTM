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
$_SESSION['pid'] =1;
$_SESSION['uprojid'] = "1";

$_SESSION['projectid'] = "1";
$_SESSION['groupid'] = "1";
$_SESSION['gid'] = "1";
$_SESSION['userid'] = "1";
?>



<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>ISTM INDEPENDENT SOFTWARE TESTING MODEL</title>
  <meta name="description" content="ISTM INDEPENDENT SOFTWARE TESTING MODEL - SOFTWARE TESTING RESOURCES">
  <meta name="Eric Neilson" content="Eric Neilson">

  <link rel="stylesheet" href="istm.css?v=1.0">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
   <!--HEAD SCIPTS-->
   <script>
function showDocumentcat(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHintdoc1").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHintdoc1").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "gendocdd/dct.php?q="+str, true);
  xhttp.send();
}
  </script>
  
  <script>
function showDocumentbycat(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHintdoc2").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHintdoc2").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "gendocdd/dbct.php?q="+str, true);
  xhttp.send();
}
  </script>
  <script>
function showDocumentbycattpt(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHintdoc3").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHintdoc3").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "gendocdd/dtpe.php?q="+str, true);
  xhttp.send();
}
  </script>
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

<a href="http://www.istm.online/zzpl/ISTM.pod">Google</a>
<a href="https://www.facebook.com">Facebook</a>
<a href="https://www.youtube.com">YouTube</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">FUNDAMENTALS</button>
<div class="dropdown-content">

<a href="https://www.google.com">Google</a>
<a href="https://www.facebook.com">Facebook</a>
<a href="https://www.youtube.com">YouTube</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">LIFE CYCLE</button>
<div class="dropdown-content">

<a href="https://www.google.com">Google</a>
<a href="https://www.facebook.com">Facebook</a>
<a href="https://www.youtube.com">YouTube</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">TEST LEVELS</button>
<div class="dropdown-content">

<a href="https://www.google.com">Google</a>
<a href="https://www.facebook.com">Facebook</a>
<a href="https://www.youtube.com">YouTube</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">TEST TYPES</button>
<div class="dropdown-content">

<a href="https://www.google.com">Google</a>
<a href="https://www.facebook.com">Facebook</a>
<a href="https://www.youtube.com">YouTube</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">TEST DESIGN</button>
<div class="dropdown-content">

<a href="https://www.google.com">Google</a>
<a href="https://www.facebook.com">Facebook</a>
<a href="https://www.youtube.com">YouTube</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">STATIC TECHNIQUES</button>
<div class="dropdown-content">

<a href="https://www.google.com">Google</a>
<a href="https://www.facebook.com">Facebook</a>
<a href="https://www.youtube.com">YouTube</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">TEST MANAGEMENT</button>
<div class="dropdown-content">

<a href="https://www.google.com">Google</a>
<a href="https://www.facebook.com">Facebook</a>
<a href="https://www.youtube.com">YouTube</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">TOOLS</button>
<div class="dropdown-content">

<a href="https://www.google.com">Google</a>
<a href="https://www.facebook.com">Facebook</a>
<a href="https://www.youtube.com">YouTube</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">DOWNLOADS</button>
<div class="dropdown-content">

<a href="https://www.google.com">Google</a>
<a href="https://www.facebook.com">Facebook</a>
<a href="https://www.youtube.com">YouTube</a>
</div>
</div>
</div> 
</div>     
</div>


<div class="header">   
	<div class="headerimg">
		<img alt="ISTM INDEPENDENT SOFTWARE TESTING MODEL"  img src="inc/img/ISTM350.jpg" >
	</div> 
</div> 

<div class="flex-cont">
<h1>ISTM INDEPENDENT SOFTWARE TESTING MODEL</h1> 
</div> 

<div class="flex-cont">
<p>p</p>
</div> 
  
  <div class="flex-cont">
<br></br><br></br><br></br><br></br><br></br>
</div> 
<?php
include $_SERVER['DOCUMENT_ROOT'].'/dev/testdriver/insert-test.php';

echo inserttest(3, 3);

?>

<div class="flex-cont">
<br></br><br></br><br></br><br></br><br></br>
</div> 
<?php
include $_SERVER['DOCUMENT_ROOT'].'/dev/testdriver/gettptfid.php';

echo gettptfid(3, 1, 1);

?>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/dev/testdriver/gettptid.php';

echo gettptid(37);

?>


<?php
//include $_SERVER['DOCUMENT_ROOT'].'/inc/func/getusername.php';
//echo getusername(1);


?>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/inc/func/setnewusergroupid.php';

echo setnewusergroupid(11);

?>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/dev/testdriver/dispal.php';

echo dispal();

?>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/dev/testdriver/runpl.php';

echo runpl();

?>

<?php
//include $_SERVER['DOCUMENT_ROOT'].'/dev/testdriver/gentaq.php';

//echo gentaq(2, 2, 9);

?>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/inc/func/checkgeneratetestanalysis.php';

echo ctagen(1);

?>


 <div class="flex-cont-r" style="border-top: 1px solid;
    border-color: rgb(110, 136, 169);padding-bottom: 10px; padding-top: 10px;color: rgb(110, 136, 169); display:flex">
   
   GENERATE DOCUMENT
   <?php  include_once $_SERVER['DOCUMENT_ROOT'].'/dev/testdriver/gendocdd/doctypecatergorydd.php'; echo dispdoctypecatergorydd(); ?> 
       <div id="txtHintdoc1">
                
                
  </div> 
   <div id="txtHintdoc2">
                
                
  </div> 
    <div id="txtHintdoc3">
                
                
  </div> 

</div>
<div class="flex-cont">
<?php
include $_SERVER['DOCUMENT_ROOT'].'/dev/testdriver/docid-in-user-project.php';

echo docidinuserproject(22, 4);

?>
</div> 
<div class="flex-cont">
<p>p</p>
<?php
var_dump ($_SESSION);

?>
</div> 

<div class="flex-cont">
<br></br><br></br><br></br><br></br><br></br>
</div> 

<div class="flex-cont-fn">
<div class="dropup">
  <button class="dropupbtn">LOGIN</button>
  <div class="dropup-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>

</div>
<div class="dropup">
  <button class="dropupbtn">REGISTER</button>
  <div class="dropup-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>

</div>
<div class="dropup">
  <button class="dropupbtn">CONTACT</button>
  <div class="dropup-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>

</div>
<div class="dropup">
  <button class="dropupbtn">JOBS</button>
  <div class="dropup-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>

</div>
<div class="dropup">
  <button class="dropupbtn">POLICY</button>
  <div class="dropup-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>

</div>
<div class="dropup">
  <button class="dropupbtn">SITEMAP</button>
  <div class="dropup-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>

</div>

</div>

 <script src="js/scripts.js"></script>
</body>
</html>