<?php
 //   session_start();
   // $_SESSION = array();
   // session_destroy();
?>


<?php
session_start();
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
if (!isset($_SESSION['name']))
{
  $_SESSION['name'] = "null";
}

if (!isset($_SESSION['gid']))
{
  $_SESSION['gid'] = "null";
}

if (!isset($_SESSION['pid']))
{
  $_SESSION['pid'] = "null";
}

if (!isset($_SESSION['email']))
{
  $_SESSION['email'] = "null";
}
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

<div class="flex-cont">
<p>p</p>
</div> 

<div class="flex-cont">
<br></br><br></br><br></br><br></br><br></br>
</div> 

<div style="justify-content:center;display:flex">
  <div class="login">
    <h3>LOGIN</h3>
    <form action="authenticate.php" method="post">
      
      <label for="email">EMAIL</label>
      <input type="text" name="email" placeholder="email" id="email" required>    
      <label for="password">ENTER PASSWORD</label>
      <input type="text" name="upassword" placeholder="Password" id="upassword" required>
      <input type="submit" value="SUBMIT"></form>
  </div>
</div><br><div><br><br><br><br><br></div> </div>


<div class="flex-cont">
  <?php
  print_r ($_SESSION);
  ?>
<p>p</p>
</div> 

<div class="flex-cont">
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



<!--
 <script src="js/scripts.js"></script>
-->
</body>
</html>