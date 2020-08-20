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

include $_SERVER['DOCUMENT_ROOT'].'/consent/getuserip.php';
//echo getuserip() = $uip;
$_SESSION['IP_ADDR'] = getuserip();
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
  
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
  
   <!--HEAD SCIPTS-->
 <!-- <script src="js/scripts.js"></script>-->
  <script data-ad-client="ca-pub-1430687117490244" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>

<body>
    <!--TOP SCIPTS-->
<?php
 // include $_SERVER['DOCUMENT_ROOT'].'/consent/getuserip.php';
  include $_SERVER['DOCUMENT_ROOT'].'/consent/ipexists.php';
    $uip = getuserip();
   $ipe = ipexists($uip);
  if($ipe==0){
  $divStyle = 'style="display:show"';
  }
  else{
  $divStyle = 'style="display:none"';
  }
  echo '<div ' . $divStyle . '>';
echo'  <!-- Trigger/Open The Modal -->
<button id="myBtn" style="display:none">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
      <h2>ISTM TOS, COOKIE AND PRIVACY </h2>
    </div>
    <div class="modal-body">
      
      <p>Click I Consent to accept our TOS, Cookies and Privacy Policy</p>
      
      <form action="/consent/consent.php" method="post">
  
  <input type="hidden" id="ip" name="ip" value="';echo $_SESSION['IP_ADDR']; echo'"><br>
  
  <input type="submit" value="I Consent">
</form> 
    </div>
   
  </div>
</div>
</div>';
  ?>
    
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
  <p>New Artifacts are being added regulary.</p>
</div> 
</div> 
  
<div class="istm-info-cont">
  
<div class="istm-cont">
   <h2>ISTM</h2>
<p>ISTM is available as a local suite. Download from the Downloads page.</p>
<p>ISTM offers local testing soloutions and resources.</p>
<p>ISTM design is taken from industry standards and best practices.</p>
<p>ISTM is designed to comply with TMMi maturity level five.</p>
<p>ISTM provides a framework that covers all testing activities from analysis to sign-off.</p>
<p>ISTM has a comprehensive range of software testing artifacts.</p>
<p>ISTM is designed to be used by software testing professionals of all abilities and experience.</p>
</div> 

<div class="istm-online-cont">
   <h2>ISTM ONLINE</h2>
<p>ISTM Online is available as an online portal that can be accessed from any computer with an internet connection any day or time.</p>
<p>ISTM Online offers online testing soloutions and resources.</p>
<p>ISTM Online provides a framework that covers all testing activities from analysis to sign-off.</p>
<p>ISTM Online has a comprehensive range of software testing artifacts.</p>
<p>ISTM Online can create, read, update and delete (CRUD) all artifacts dynamically.</p>
<p>ISTM Online has a database that provides powerful reporting, sorting and metric gathering.</p>
  <p>ISTM Online offers all that the local ISTM offers.</p>
</div> 
  
</div> 

<div class="flex-cont">
<br></br>
</div> 

<div class="istm-info-cont">
  
<div class="istm-features-cont">
   <h2>ISTM FEATURES</h2>
<p>ISTM is Time Saving.</p>
<p>ISTM is Comprehensive.</p>
<p>ISTM is Effective.</p>
<p>ISTM Increases Quality Assurance.</p>
<p>ISTM Increases Maturity.</p>
<p>ISTM is Scalable.</p>
<p>ISTM is Physical or Online.</p>
<p>ISTM Has Over 60 Artifacts.</p>
</div> 

<div class="istm-examples-cont">
   <h2>ISTM EXAMPLES</h2>
<p>ISTM Test Basis.  <a href="http://www.istm.online/test-basis/test-basis-example.php">Test Basis Example</a></p>
<p>ISTM Test Condition.<a href="http://www.istm.online/test-condition/test-condition-example.php">Test Condition Example</a></p>

<p>ISTM Test Procedure.  <a href="http://www.istm.online/test-procedures/test-procedure-example-doc.php">Test Procedure Example</a></p>
<p>ISTM Test Procedure Execution.  <a href="http://www.istm.online/test-procedures/test-procedure-execution-example-doc.php">Test Procedure Execution Example</a></p>
  <p>ISTM Home Page.</p>
<p>ISTM Time Keeping. <a href="/dev/generate-doc/callpage.php?userid=1&docidentifier=29&gid=1&pid=1&docname=ISTM%20Time%20Keeping&doctype=18">Time Recording Example</a></p>
<p>ISTM Incident Recording.</p>
  <p>ISTM Test Report. <a href=" http://www.istm.online/dev/generate-doc/callpage.php?userid=1&docidentifier=30&gid=1&pid=1&docname=09082020%20Test%20Report&doctype=20">Test Report Example</a></p>
 <p>Register to unlock the functionality of the above examples.</p>
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
 <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>