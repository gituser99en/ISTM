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

  <title>ISTM SOFTWARE TESTING ARTIFACTS</title>
  <meta name="description" content="LIST OF UTILIZED ISTM SOFTWARE TESTING ARTIFACTS AND ASSETS">
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
		<img alt="ISTM INDEPENDENT SOFTWARE TESTING MODEL"  img src="../inc/img/ISTM350.jpg" >
	</div> 
</div> 

<div class="flex-cont">
<h1>ISTM SOFTWARE TESTING ARTIFACTS AND ASSETS DOWNLOAD</h1> 
</div> 
   <div class="flex-cont2">
<br></br>
</div> 
   <div class="flex-cont2">
<br></br>
</div> 
<div class="flex-cont">
<h3>DOWNLOAD ISTM ARTIFACTS</h3>
</div> 

   <div class="flex-cont2">
<br></br>
</div> 
   <div class="flex-cont2">
<br></br>
</div> 

  <div class="flex-cont"> 
   
   <div class="flex-cont1" >
  <dl>
  <dt style="
    background-color:rgb(110, 136, 169);  color:white;
">Analysis</dt>
  <dt>Development Analysis Form</dt>
  <dd>Form that contains a list of development analysis questions and recorded data.</dd>
  <dt>Test Analysis Form</dt>
  <dd>Form that contains a list of test analysis questions and recorded data.</dd>
   <dt>Product Analysis Form</dt>
  <dd>Form that contains a list of product analysis questions and recorded data.</dd>
  <dt>Master Analysis Form</dt>
  <dd>Form that contains all analysis recorded data used for reference.</dd>
</dl>

</div>  


  <div class="flex-cont1" >
  <dl>
  <dt style="
    background-color:rgb(110, 136, 169);  color:white;
">Test Management</dt>
  <dt>Test Policy</dt>
  <dd>High level document outlining the ethos of the companies testing ambiitions.</dd>
  <dt>Test Strategy</dt>
  <dd>High level document outlining the overall strategy for testing activities.</dd>
  <dt>Master Test Plan</dt>
  <dd>High level document describing the plan of testing activities.</dd>
   <dt>Test Plan</dt>
  <dd>Document describing the plan of testing activities for a paticular test level or test type.</dd>
     <dt>Product Control Forms</dt>
  <dd>Record of project and process status.</dd>
    <dt>Work Breakdown Structure</dt>
  <dd>Test effort and estimation.</dd>
</dl>

  </div>  
</div> 



   <div class="flex-cont1">
<br></br>
</div> 
<div class="flex-cont"> 
   <div class="flex-cont1">
  <dl>
  <dt style="
    background-color:rgb(110, 136, 169);  color:white;
">Test Basis</dt>
  <dt><a href="/software-testing-downloads/templates/test-basis/ISTM-Test-Basis-List-Template.ods" download>ISTM-Test-Basis-List-Template</a></dt>
  <dd>Document to record all test basis items collected.</dd>
  <dt>Test Basis product Control Form</dt>
  <dd>At-a-glance guide of test basis list status.</dd>
  <dt>Test Basis Risk List</dt>
  <dd>Record of all risks associated with the test basis.</dd>
  <dt>Test Basis Metrics List</dt>
  <dd>Record of all metrics associated with the test basis.</dd>
    <dt>Test Basis Process</dt>
  <dd>Describes the process of all test basis activities.</dd>
</dl>
 </div>  



   <div class="flex-cont1" >
  <dl>
  <dt style="
    background-color:rgb(110, 136, 169);  color:white;
">Test Condition</dt>
  <dt>Test Condition List</dt>
  <dd>Document to record all test condition items collected.</dd>
  <dt>Test Condition Product Control Form</dt>
  <dd>At-a-glance guide of test condition list status.</dd>
  <dt>Test Condition Risk List</dt>
  <dd>Record of all risks associated with the test condition.</dd>
  <dt>Test Condition Metrics List</dt>
  <dd>Record of all metrics associated with the test condition.</dd>
    <dt>Test Condition Process</dt>
  <dd>Describes the process of all test condition activities.</dd>
</dl>
 </div>  



 
</div> 
  <div class="flex-cont1">
<br></br>
</div> 
<div class="flex-cont"> 
 <div class="flex-cont1" > 
  <dl>
  <dt style="
    background-color:rgb(110, 136, 169);  color:white;
">Test Procedure</dt>
  <dt>Test Procedure List</dt>
  <dd>Document to record all test procedure items collected.</dd>
  <dt>Test Procedure Product Control Form</dt>
  <dd>At-a-glance guide of test procedure list status.</dd>
  <dt>Test Procedure Risk List</dt>
  <dd>Record of all risks associated with the test procedure.</dd>
  <dt>Test Procedure Metrics List</dt>
  <dd>Record of all metrics associated with the test procedure.</dd>
    <dt>Test Procedure Process</dt>
  <dd>Describes the process of all test procedure activities.</dd>
</dl>
</div>  

 <div class="flex-cont1" > 
  <dl>
  <dt style="
    background-color:rgb(110, 136, 169);  color:white;
">Use Case</dt>
  <dt>Use Case List</dt>
  <dd>Document to record all use case items collected.</dd>
  <dt>Use Case Product Control Form</dt>
  <dd>At-a-glance guide of use case list status.</dd>
  <dt>Use case Risk List</dt>
  <dd>Record of all risks associated with the use case.</dd>
  <dt>Use Case Metrics List</dt>
  <dd>Record of all metrics associated with the use case.</dd>
    <dt>Use Case Process</dt>
  <dd>Describes the process of all use case activities.</dd>
</dl>
</div>  
  </div>  

 <div class="flex-cont1">
<br></br>
</div> 

<div class="flex-cont"> 
   <div class="flex-cont1" >
  <dl>
  <dt style="
    background-color:rgb(110, 136, 169);  color:white;
">Traceability</dt>
  <dt>Test Basis to Test Condition Matrix</dt>
  <dd>Document tracing the relationship between the test basis and test conditions.</dd>
    <dt>Test Condition to Test Procedure Matrix </dt>
  <dd>Document tracing the relationship between the test conditions and test procedures.</dd>
    <dt>Planned V Actual Matrix </dt>
  <dd>Document tracing the planned versus actual test procedures executed.</dd>
     <dt>TMMi Matrix </dt>
  <dd>Document tracing TMMi status.</dd>
 
</dl>
 </div>  
  
  <div class="flex-cont1" >
  <dl>
  <dt style="
    background-color:rgb(110, 136, 169);  color:white;
">Metrics and Measurement</dt>
  <dt>Master Metric List</dt>
  <dd>Document listing all metrics collected.</dd>
    <dt>Process Metric List</dt>
  <dd>Metrics associated with particular processes.</dd>
    <dt>Process Measurement List</dt>
  <dd>Measurements associated with particular processes.</dd>
 
</dl>
 </div>  
  
 </div>  

<div class="flex-cont"> 
   <div class="flex-cont1" >
  <dl>
  <dt style="
    background-color:rgb(110, 136, 169);  color:white;
">Test Reports</dt>
  <dt>Test Report</dt>
  <dd>General and periodic report on testing activities and issues.</dd>
    <dt>Test Execution Report</dt>
  <dd>General and periodic report on test execution activities and issues.</dd>
     <dt>Defect Report</dt>
  <dd>General and periodic report on test defects.</dd>
 
</dl>
 </div>  
  
  <div class="flex-cont1" >
  <dl>
  <dt style="
    background-color:rgb(110, 136, 169);  color:white;
">Process Improvement</dt>
  <dt>Post Mortem</dt>
  <dd>Document listing issues and possible improvements discovered. Derived form the test incident report.</dd>
    <dt>Process Update Form</dt>
  <dd>Form requesting updating of a test process.</dd>
 
</dl>
 </div>  
  
 </div>  

  <div class="flex-cont1">
<br></br>
</div> 
<div class="flex-cont"> 
   <div class="flex-cont1" >  
  <dl>
  <dt style="
    background-color:rgb(110, 136, 169); color:white;
">Risks</dt>
  <dt>Master Risk List</dt>
  <dd>All risks associated with project</dd>
  <dt>Risk Mitigation Matrix</dt>
  <dd>Mitigation steps against risks.</dd>
    <dt>Process Risk List</dt>
  <dd>Risks associated with particular process.</dd>
   
  </dl>
  </div> 
  
  
   <div class="flex-cont1" >  
  <dl>
  <dt style="
    background-color:rgb(110, 136, 169); color:white;
">Processes</dt>
  <dt>Process List</dt>
  <dd>List of all test processes.</dd>
  <dt>Process Document</dt>
  <dd>Definition and description of particular process.</dd>
   
  </dl>
  </div> 
  </div> 
  <div class="flex-cont1">
<br></br>
</div> 

<div class="flex-cont"> 
  
  
  
   <div class="flex-cont1" >  
  <dl>
  <dt style="
    background-color:rgb(110, 136, 169); color:white;
">General</dt>
  <dt>Test Submission Form</dt>
  <dd>Document submitted by development prior to test execution.</dd>
  <dt>Incident Report</dt>
  <dd>Document to record all test incidents collected.</dd>
     <dt>Review Assesment Form</dt>
  <dd>Record of the review results of a particular document or process.</dd>
    <dt>Time Keeping Form</dt>
  <dd>Record of time spent on activities per resource.</dd>
    <dt>Crib Sheet</dt>
  <dd>Reference for new employees or resources joining project.</dd>
   <dt>Test Sign-off Form</dt>
  <dd>Document submitted at end of project.</dd>
    <dt><a href="/software-testing-downloads/v-model/vmodel.jpg" download>V Model</a></dt>
  <dd>Graphical display of the V Model.</dd>
     <dt><a href="/software-testing-downloads/templates/istmdoc.odt" download>Document Template</a></dt>
  <dd>Basic document template.</dd>
  </dl>
  </div> 
  </div> 
  <div class="flex-cont1">
<br></br>
</div> 






<div class="flex-cont2">
<br></br><br></br><br></br><br></br><br></br>
</div> 
<div class="flex-cont2">
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