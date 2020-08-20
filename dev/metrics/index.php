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

<a href="http://www.istm.online/login/">Login</a>
  <a href="http://www.istm.online/register/">Register</a>
  <a href="http://www.istm.online/login/">Buy</a>
  <a href="http://www.istm.online/login/">Artifacts</a>
  <a href="http://www.istm.online/login/">Example</a>
</div>
</div>
<div class="dropdown">
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
</div>
</div>
<div class="dropdown">
<button class="dropbtn">LINKS</button>
<div class="dropdown-content">

  <a href="http://www.istm.online/software-testing-links/">Links</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">TOOLS</button>
<div class="dropdown-content">

<a href="http://www.istm.online/software-testing-tools/">Tools</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">DOWNLOADS</button>
<div class="dropdown-content">

<a href="http://www.istm.online/software-testing-downloads/">Downloads</a>
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
<p>p</p>
</div> 
<div class="flex-cont">
  <div class="flex-cont1">
 
 <?php
include $_SERVER['DOCUMENT_ROOT'].'/dev/metrics/display-metric-catergories.php';
echo displaymetriccatergories();


?>
</div> 
  </div> 
  
  <div class="flex-cont">
  <div class="flex-cont1"style="
    width: 30%;
">
 
 <?php
include $_SERVER['DOCUMENT_ROOT'].'/dev/metrics/display-metrics-by-catergories.php';
    $catid ="Test Basis";
echo displaymetricbycatergories($catid);


?>
</div> 
<div class="flex-cont1"style="
    width: 30%;
">
 
 <?php
//include $_SERVER['DOCUMENT_ROOT'].'/dev/metrics/display-metrics-by-catergories.php';
    $catid ="Test Condition";
echo displaymetricbycatergories($catid);


?>
</div> 
    <div class="flex-cont1"style="
    width: 30%;
">
 
 <?php
//include $_SERVER['DOCUMENT_ROOT'].'/dev/metrics/display-metrics-by-catergories.php';
    $catid ="Test Procedures";
echo displaymetricbycatergories($catid);


?>
</div> 
  </div> 
    <div class="flex-cont">
  <div class="flex-cont1"style="
    width: 30%;
">
 
 <?php
//include $_SERVER['DOCUMENT_ROOT'].'/dev/metrics/display-metrics-by-catergories.php';
    $catid ="Users";
echo displaymetricbycatergories($catid);


?>
</div> 
<div class="flex-cont1"style="
    width: 30%;
">
 
 <?php
//include $_SERVER['DOCUMENT_ROOT'].'/dev/metrics/display-metrics-by-catergories.php';
    $catid ="Project";
echo displaymetricbycatergories($catid);


?>
</div> 
    <div class="flex-cont1"style="
    width: 30%;
">
 
 <?php
//include $_SERVER['DOCUMENT_ROOT'].'/dev/metrics/display-metrics-by-catergories.php';
    $catid ="Use Case";
echo displaymetricbycatergories($catid);


?>
</div> 
  </div> 
  
     <div class="flex-cont">
  <div class="flex-cont1"style="
    width: 30%;
">
 
 <?php
//include $_SERVER['DOCUMENT_ROOT'].'/dev/metrics/display-metrics-by-catergories.php';
    $catid ="Metrics";
echo displaymetricbycatergories($catid);


?>
</div> 
<div class="flex-cont1"style="
    width: 30%;
">
 
 <?php
//include $_SERVER['DOCUMENT_ROOT'].'/dev/metrics/display-metrics-by-catergories.php';
    $catid ="Risks";
echo displaymetricbycatergories($catid);


?>
</div> 
    <div class="flex-cont1"style="
    width: 30%;
">
 
 <?php
//include $_SERVER['DOCUMENT_ROOT'].'/dev/metrics/display-metrics-by-catergories.php';
    $catid ="Time Keeping";
echo displaymetricbycatergories($catid);


?>
</div> 
  </div> 
  
       <div class="flex-cont">
  <div class="flex-cont1"style="
    width: 30%;
">
 
 <?php
//include $_SERVER['DOCUMENT_ROOT'].'/dev/metrics/display-metrics-by-catergories.php';
    $catid ="Documents";
echo displaymetricbycatergories($catid);


?>
</div> 
<div class="flex-cont1"style="
    width: 30%;
">
 
 <?php
//include $_SERVER['DOCUMENT_ROOT'].'/dev/metrics/display-metrics-by-catergories.php';
    $catid ="Process";
echo displaymetricbycatergories($catid);


?>
</div> 
    <div class="flex-cont1"style="
    width: 30%;
">
 
 <?php
//include $_SERVER['DOCUMENT_ROOT'].'/dev/metrics/display-metrics-by-catergories.php';
    $catid ="Incidents";
echo displaymetricbycatergories($catid);


?>
</div> 
  </div> 
  

<div class="flex-cont">
<br></br><br></br><br></br><br></br><br></br>
</div> 

<div class="flex-cont">
  total test basis master items
 <?php
include $_SERVER['DOCUMENT_ROOT'].'/dev/metrics/display-test-basis-master-item.php';
echo dispmasterfield();


?>
</div> 

<div class="flex-cont">
  total test basis sub items
 <?php
include $_SERVER['DOCUMENT_ROOT'].'/dev/metrics/display-test-basis-field.php';
echo displayfield();


?>
</div> 

<div class="flex-cont1">
<br></br><br></br><br></br><br></br><br></br>
</div> 




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
   <a href="http://www.istm.online/support/">SUPPORT</a>
  </div>
   </div>
  
  <div class="dropup">
  <button class="dropupbtn">HOME</button>
  <div class="dropup-content">
  <a href="http://www.istm.online/">ISTM</a>
  <a href="http://www.istm.online/home/">Home</a>
  </div>
   </div>
  


<div class="dropup">
  <button class="dropupbtn">JOBS</button>
  <div class="dropup-content">
   <a href="http://www.istm.online/software-testing-jobs/">JOBS</a>
  </div>

</div>
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