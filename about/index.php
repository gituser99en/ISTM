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
 <a href="http://www.istm.online/register/">Register</a>
<a href="http://www.istm.online/login/">Login</a>
 
<!--  <a href="http://www.istm.online/login/">Buy</a>-->
  <a href="http://www.istm.online/software-testing-artifacts/">ISTM Artifacts</a>
 <a href="http://www.istm.online/test-basis/test-basis-example.php">Test Basis Example</a>
 <a href="http://www.istm.online/test-condition/test-condition-example.php">Test Condition Example</a>
  <a href="http://www.istm.online/test-procedures/test-procedure-example-doc.php">Test Procedure Example</a>
   <a href="http://www.istm.online/test-procedures/test-procedure-execution-example-doc.php">Test Procedure Execution Example</a>
  <?php
  //<a href="/dev/generate-doc/callpage.php?userid=1&docidentifier=1&gid=1&pid=1&docname=ISTM-Test-Basis&doctype=1">Test Basis Example</a>
  //echo'
 // <a href="/dev/generate-doc/callpage.php?userid=1&docidentifier=2&gid=1&pid=1&docname=ISTM-Test-Condition&doctype=2">Test Condition Example</a>
 
 // ';?>
   
<!--  <a href="http://www.istm.online/test-basis/test-basis-exmaple/test-basis.php">Test Basis Example</a>
<a href="/dev/generate-doc/callpage.php?userid=1&docidentifier=3&gid=1&pid=1&docname=ISTM-Index-Test-Procedure&doctype=3">Test Procedure Example</a>
   <a href="http://www.istm.online/test-condition/test-condition-exmaple/test-condition.php">Test Condition Example</a>
   <a href="http://www.istm.online/test-procedures/test-procedures-exmaple/test-procedures.php">Test Procedures Example</a>-->
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
  <!--
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
  <a href="http://www.istm.online/software-testing-artifacts/">Artifacts</a>
</div>
</div>
-->
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
<!--<a href="http://www.istm.online/messages/page-under-construction.php">Tools</a>-->
<a href="http://www.istm.online/software-testing-tools/">Tools</a>
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
		<img alt="ISTM INDEPENDENT SOFTWARE TESTING MODEL"  img src="inc/img/ISTM350.jpg" >
	</div> 
</div> 

<div class="flex-cont">
<h1>ISTM INDEPENDENT SOFTWARE TESTING MODEL</h1> 
</div> 

<div class="flex-cont1">
<br></br>
</div> 

<div class="istm-info-cont"> 
<div class="istm-intro-cont">
  <h2>ISTM WELCOME</h2>
<p>Welcome to Independent Software Testing Model (ISTM).</p>
<p>ISTM is a software testing model/framework designed to offer a full testing solution.</p>
<p>ISTM is currently under development. However, progress is being made rapidly. The aim is to have the physical and online versions available incorporating more than 60 test artifcats as listed in the artifact page.</p>
</div> 
</div> 
  
<div class="istm-info-cont">
  
<div class="istm-cont">
   <h2>ISTM PLANNED DEVELOPMENTS</h2>
  <div class="flex-cont">
  <div class="istm-cont" style="border:0px;">
<p>ISTM All Artifacts As Listed.</p>
<p>ISTM Customised Home Page.</p>
<p>ISTM Sort By On All Artifacts.</p>
<p>ISTM Software Testing Resources.</p>
<p>ISTM Support.</p>
    </div> 
  <div class="istm-cont" style="border:0px;">
<p>ISTM Sitemap.</p>
<p>ISTM Actions.</p>
  <p>ISTM Messaging.</p>
  <p>ISTM User Profile.</p>
  <p>ISTM Metrics.</p>
    </div> 
     </div> 
</div> 

<div class="istm-online-cont">
   <h2>ISTM RECENTLY DEVELOPED</h2>
<p>17/08/202 Added ISTM Test Basis Template.</p>
<p>ISTM Online Test Basis.</p>
<p>ISTM Online Test Condition.</p>
<p>ISTM Online Test Procedure Template.</p>
<p>ISTM Online Test Procedure Execution.</p>
<p>ISTM Online Time Keeping.</p>
<p>ISTM Online Incident Recording.</p>
<p>ISTM Online Sort By On Document Columns.</p>
</div> 
  
</div> 

<div class="flex-cont">
<br></br>
</div> 

<div class="istm-info-cont">
  
<div class="istm-features-cont">
   <h2>ISTM PAID FEATURES</h2>
<p>ISTM is Time Saving.</p>
<p>ISTM is Comprehensive.</p>
<p>ISTM is Effective.</p>
<p>ISTM Increases Maturity.</p>
<p>ISTM is Scalable.</p>
<p>ISTM is Physical or Online.</p>
<p>ISTM Has Over 60 Artifacts.</p>
</div> 

<div class="istm-examples-cont">
   <h2>ISTM FREE VERSION</h2>
<p>ISTM Test Basis. <a href="/dev/generate-doc/callpage.php?userid=1&docidentifier=1&gid=1&pid=1&docname=ISTM-Test-Basis&doctype=1">Test Basis Example</a></p>
<p>ISTM Test Condition. <a href="/dev/generate-doc/callpage.php?userid=1&docidentifier=2&gid=1&pid=1&docname=ISTM-Test-Condition&doctype=2">Test Condition Example</a></p>
<p>ISTM Test Procedure Template.  <a href="/dev/generate-doc/callpage.php?userid=1&docidentifier=3&gid=1&pid=1&docname=ISTM-Test-Procedure&doctype=3">Test Procedure Template Example</a></p>
  <p>ISTM Test Procedure Execution.  <a href="/dev/generate-doc/callpage.php?userid=1&docidentifier=24&gid=1&pid=1&docname=Index%20Test%20procedure%20Execution&doctype=19&tptid=3">Test Procedure Execution Example</a></p>
<p>ISTM Home Page.</p>
<p>ISTM Time Keeping. <a href="/dev/generate-doc/callpage.php?userid=1&docidentifier=29&gid=1&pid=1&docname=ISTM%20Time%20Keeping&doctype=18">Time Recording Example</a></p>
<p>ISTM Incident Recording.</p>
</div> 
 
</div> 

<div class="flex-cont">
<br></br>
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
    <a href="http://www.istm.online/support/">CONTACT</a>
  
  </div>
   </div>
  
<!--  <div class="dropup">
  <button class="dropupbtn">HOME</button>
  <div class="dropup-content">
  <a href="http://www.istm.online/">ISTM</a>
  <a href="http://www.istm.online/home/">Home</a>
  </div>
   </div>
 --> 

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