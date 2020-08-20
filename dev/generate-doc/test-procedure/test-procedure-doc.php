<?php

session_start();

function disptestproc($userid, $docidentifier, $gid, $pid, $docname){
$doctypeid = 3;

echo'
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>ISTM INDEPENDENT SOFTWARE TESTING MODEL</title>
  <meta name="description" content="ISTM INDEPENDENT SOFTWARE TESTING MODEL - SOFTWARE TESTING RESOURCES">
  <meta name="Eric Neilson" content="Eric Neilson">

  <link rel="stylesheet" href="http://www.istm.online/dev/generate-doc/test-procedure/tp-form.css?v=1.0">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
   <!--HEAD SCIPTS-->
</head>

<body>
    <!--TOP SCIPTS-->
  
   <!--CONTENT--> 
   
<!--HEADER TOPNAV H1--> ';
  echo'
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

';

echo'
<div class="header">   
	<div class="headerimg">
		<img alt="ISTM INDEPENDENT SOFTWARE TESTING MODEL"  img src="../../../inc/img/ISTM350.jpg" >
	</div> 
</div> 
';

echo'
<div class="flex-cont">
<h1>'; echo $docname; echo'</h1> 
</div> 
';

echo'


  
<div class="flex-cont"> 
   <div class="flex-cont-50"> 
';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-procedure/display-doc-id.php';
echo dispdocid($docidentifier);


echo'
</div>   
     <div class="flex-cont-50"> 
 ';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-procedure/display-test-procedures-info.php';
echo dispprocinf($docidentifier);


echo'
</div>  
</div>   


';
  
 
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-procedure/display-field-label.php';
echo dispfieldlabel();



  
  

//include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-procedure/display-section.php';
//echo displaysection($docidentifier);

include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-procedure/display-section-template.php';
echo displaysectiont($docidentifier);
  




echo'

<div class="flex-cont1">
<br></br><br></br><br></br><br></br><br></br>
</div> 
<div class="flex-cont">
<h3>INSERT MASTER ITEM</h3>
</div> 
';
//include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-basis/display-field-label-mi.php';
//echo dispfieldlabelmi();
   echo'<div class="flex-cont-la">
<div class="tbf-field">
                <div class="tpt-field-procnum">';
                echo "Test Procedure";
                
                echo' </div> 
                 
                  <div class="tpt-field-tcs">';
                 echo "Test Condition";
               
                 echo'</div> 
                  <div class="tpt-field-title">';
           
                echo "Title";
                echo' </div> 
               
                 
                
</div> 
</div> ';

echo'
<form action="/dev/generate-doc/test-procedure/create-tpt.php" method="post">
  <div class="flex-cont-la">
<div class="tbf-field">
 <div class="tpt-field-procnum" style="background-color:white;">
                <input type="text" name="tpid" placeholder="tpid" id="tpid" required>
                 </div> 
                <div class="tpt-field-tcs" style="background-color:white;">
                <input type="text" name="tcl" placeholder="tcl" id="tcl" required>
                 </div> 
                  <div class="tpt-field-title" style="background-color:white;">
                <input type="text" name="title" placeholder="title" id="title" required>
                 </div> 
                 
                 
                <input type="hidden" id="userid" name="userid" value="'; echo $userid; echo'">
  				<input type="hidden" id="docid" name="did" value="'; echo $docidentifier; echo'">
                <input type="hidden" id="groupid" name="gid" value="'; echo $gid; echo'">
  				<input type="hidden" id="projectid" name="pid" value="'; echo $pid; echo'">
                <input type="hidden" id="dtid" name="dtid" value="'; echo $docidentifier; echo'">
                <input type="hidden" id="dname" name="dname" value="'; echo $docname; echo'">
                <input type="hidden" id="doctypeid" name="doctypeid" value="'; echo $doctypeid; echo'">
</div> 
</div> 


</div> 
  <input type="submit" value="REGISTER">
</form>
';
echo'
<div class="flex-cont1">
<br></br>
</div> 
';
echo'<div class="flex-cont">
<h3>INSERT SUB ITEM</h3>
</div> ';
//echo dispfieldlabel();
  echo'
<div class="flex-cont-la">
<div class="tbf-field">
                <div class="tbf-field-label-step">
                STEP #
                 </div> 
                
                  <div class="tbf-field-label-desc" style="width:45%;">
                DESCRIPTION
                 </div> 
                  <div class="tbf-field-label-er" style="width:45%;">
                EXPECTED RESULTS
                 </div> 
                  <div class="tbf-field-label-step">
                PROCEDURE
                 </div> 
                
                
</div> 
</div> 

';
  
  echo'
<form action="/dev/generate-doc/test-procedure/create-tptf.php" method="post">
  <div class="flex-cont-la">
<div class="tbf-field">
               <div class="tbf-field-label-step" style="background-color:white;">
                <input type="text" name="step" placeholder="step" id="step" required>
                 </div> 
                  <div class="tbf-field-label-desc" style="background-color:white; width:45%;">
                <input type="text" name="action" placeholder="action" id="action" required>
                 </div> 
                <div class="tbf-field-label-er" style="background-color:white; width:45%;">
                <input type="text" name="expected" placeholder="expected" id="expected" required>
                 </div> 
                  <div class="tbf-field-label-step" style="background-color:white;">
                <input type="text" name="tpid" placeholder="tpid" id="tpid" required>
                 </div> 
                 
                <input type="hidden" id="userid" name="userid" value="'; echo $userid; echo'">
  				<input type="hidden" id="docid" name="did" value="'; echo $docidentifier; echo'">
                <input type="hidden" id="groupid" name="gid" value="'; echo $gid; echo'">
  				<input type="hidden" id="projectid" name="pid" value="'; echo $pid; echo'">
                <input type="hidden" id="dtid" name="dtid" value="'; echo $docidentifier; echo'">
                <input type="hidden" id="dname" name="dname" value="'; echo $docname; echo'">
                <input type="hidden" id="doctypeid" name="doctypeid" value="'; echo $doctypeid; echo'">
</div> 
</div> 


</div> 
  <input type="submit" value="REGISTER">
</form>
';


echo'


<div class="flex-cont1">
<br></br><br></br><br></br><br></br><br></br>
</div>';
  
  echo'<div class="flex-cont">
<h3>UPDATE MASTER ITEM</h3>
</div> ';

//echo dispfieldlabelmi();
 echo'<div class="flex-cont-la">
<div class="tbf-field">
                <div class="tpt-field-procnum">';
                echo "Test Procedure";
                
                echo' </div> 
                 
                  <div class="tpt-field-tcs">';
                 echo "Test Condition";
               
                 echo'</div> 
                  <div class="tpt-field-title">';
           
                echo "Title";
                echo' </div> 
               
                 
                
</div> 
</div> ';

echo'
<form action="/dev/generate-doc/test-procedure/update-tpt.php" method="post">
  <div class="flex-cont-la">
<div class="tbf-field">
 <div class="tpt-field-procnum" style="background-color:white;">
                <input type="text" name="tpid" placeholder="tpid" id="tpid" required>
                 </div> 
                <div class="tpt-field-tcs" style="background-color:white;">
                <input type="text" name="tcl" placeholder="tcl" id="tcl" required>
                 </div> 
                  <div class="tpt-field-title" style="background-color:white;">
                <input type="text" name="title" placeholder="title" id="title" required>
                 </div> 
                 
                 
                <input type="hidden" id="userid" name="userid" value="'; echo $userid; echo'">
  				<input type="hidden" id="docid" name="did" value="'; echo $docidentifier; echo'">
                <input type="hidden" id="groupid" name="gid" value="'; echo $gid; echo'">
  				<input type="hidden" id="projectid" name="pid" value="'; echo $pid; echo'">
                <input type="hidden" id="dtid" name="dtid" value="'; echo $docidentifier; echo'">
                <input type="hidden" id="dname" name="dname" value="'; echo $docname; echo'">
                <input type="hidden" id="doctypeid" name="doctypeid" value="'; echo $doctypeid; echo'">
</div> 
</div> 


</div> 
  <input type="submit" value="REGISTER">
</form>
';
echo'
<div class="flex-cont1">
<br></br>
</div> 
';
echo'
<div class="flex-cont1">
<br></br>
</div> 
';

  echo'<div class="flex-cont">
<h3>UPDATE SUB ITEM</h3>
</div> ';
  
//echo dispfieldlabel();

 echo'
<div class="flex-cont-la">
<div class="tbf-field">
                <div class="tbf-field-label-step">
                STEP #
                 </div> 
                
                  <div class="tbf-field-label-desc" style="width:45%;">
                DESCRIPTION
                 </div> 
                  <div class="tbf-field-label-er" style="width:45%;">
                EXPECTED RESULTS
                 </div> 
                  <div class="tbf-field-label-step">
                PROCEDURE
                 </div> 
                
                
</div> 
</div> 

';
  
  echo'
<form action="/dev/generate-doc/test-procedure/update-tptf.php" method="post">
  <div class="flex-cont-la">
<div class="tbf-field">
               <div class="tbf-field-label-step" style="background-color:white;">
                <input type="text" name="step" placeholder="step" id="step" required>
                 </div> 
                  <div class="tbf-field-label-desc" style="background-color:white; width:45%;">
                <input type="text" name="action" placeholder="action" id="action" required>
                 </div> 
                <div class="tbf-field-label-er" style="background-color:white; width:45%;">
                <input type="text" name="expected" placeholder="expected" id="expected" required>
                 </div> 
                  <div class="tbf-field-label-step" style="background-color:white;">
                <input type="text" name="tpid" placeholder="tpid" id="tpid" required>
                 </div> 
                 
                <input type="hidden" id="userid" name="userid" value="'; echo $userid; echo'">
  				<input type="hidden" id="docid" name="did" value="'; echo $docidentifier; echo'">
                <input type="hidden" id="groupid" name="gid" value="'; echo $gid; echo'">
  				<input type="hidden" id="projectid" name="pid" value="'; echo $pid; echo'">
                <input type="hidden" id="dtid" name="dtid" value="'; echo $docidentifier; echo'">
                <input type="hidden" id="dname" name="dname" value="'; echo $docname; echo'">
                <input type="hidden" id="doctypeid" name="doctypeid" value="'; echo $doctypeid; echo'">
</div> 
</div> 


</div> 
  <input type="submit" value="REGISTER">
</form>
';


echo'


<div class="flex-cont1">
<br></br><br></br><br></br><br></br><br></br>
</div>';
echo'
<div class="flex-cont1">
<br></br><br></br><br></br><br></br><br></br>
</div> 
<div class="flex-cont1">
<br></br><br></br><br></br><br></br><br></br>
</div> ';

echo'
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
';


  
}
?>