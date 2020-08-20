<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>ISTM INDEPENDENT SOFTWARE TESTING MODEL</title>
  <meta name="description" content="ISTM INDEPENDENT SOFTWARE TESTING MODEL - SOFTWARE TESTING RESOURCES">
  <meta name="Eric Neilson" content="Eric Neilson">

  <link rel="stylesheet" href="tb-form.css?v=1.0">
  
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

<a href="https://www.google.com">Google</a>
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
		<img alt="ISTM INDEPENDENT SOFTWARE TESTING MODEL"  img src="../../../inc/img/ISTM350.jpg" >
	</div> 
</div> 

<div class="flex-cont">
<h1>ISTM INDEPENDENT SOFTWARE TESTING MODEL</h1> 
</div> 

<!--<div class="flex-cont">
<p>p</p>
</div> 

<div class="flex-cont">
<br></br><br></br><br></br><br></br><br></br>
</div> 

<div class="flex-cont1">
<br></br><br></br><br></br><br></br><br></br>
</div> -->

<?php
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-basis/display-doc-id.php';
echo dispdocid();


?>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-basis/display-field-label.php';
echo dispfieldlabel();

?>
<?php
//include $_SERVER['DOCUMENT_ROOT'].'/test-basis/test-basis-example/display-field-master-item.php';
//echo dispfieldmi();


?>


<?php
//include $_SERVER['DOCUMENT_ROOT'].'/test-basis/test-basis-example/display-field.php';
//echo dispfield();


?>

<?php
//include $_SERVER['DOCUMENT_ROOT'].'/test-basis/test-basis-example/display-test-basis-master-item.php';
//echo dispmasterfield();


?>

<?php
//include $_SERVER['DOCUMENT_ROOT'].'/test-basis/test-basis-example/display-test-basis-field.php';
//echo displayfield();


?>

<?php
include $_SERVER['DOCUMENT_ROOT'].'dev/generate-doc-test-basis/display-section.php';
echo displaysection();


?>




<div class="flex-cont1">
<br></br><br></br><br></br><br></br><br></br>
</div> 

<div class="flex-cont1">
<br></br><br></br><br></br><br></br><br></br>
</div> 







<div class="flex-cont1">
<br></br><br></br><br></br><br></br><br></br>
</div> 

<?php
//include $_SERVER['DOCUMENT_ROOT'].'/test-basis/test-basis-example/display-field-label.php';
echo dispfieldlabel();

?>
<form action="create-master-item.php" method="post">
  <div class="flex-cont-la">
<div class="tbf-field">
                <div class="tbf-field-name">
                <input type="text" name="name" placeholder="name" id="name" required>
                 </div> 
                  <div class="tbf-field-uid">
                <input type="text" name="uid" placeholder="uid" id="uid" required>
                 </div> 
                  <div class="tbf-field-type">
                <input type="text" name="type" placeholder="type" id="type" required>
                 </div> 
                  <div class="tbf-field-project">
                 <input type="text" name="project" placeholder="project" id="project" required>
                 </div> 
                  <div class="tbf-field-owner">
                 <input type="text" name="owner" placeholder="owner" id="owner" required>
                 </div> 
                 <div class="tbf-field-version">
               <input type="text" name="ver" placeholder="ver" id="ver" required>
                 </div> 
                 <div class="tbf-field-status">
                 <input type="text" name="stat" placeholder="status" id="stat" required>
                 </div> 
                 <div class="tbf-field-location">
                 <input type="text" name="location" placeholder="location" id="location" required>
                 </div> 
                <input type="hidden" id="userid" name="userid" value="1">
  				<input type="hidden" id="docid" name="docid" value="ITBL">
</div> 
</div> 


</div> 
  <input type="submit" value="REGISTER">
</form>

<div class="flex-cont1">
<br></br><br></br><br></br><br></br><br></br>
</div> 

<?php
//include $_SERVER['DOCUMENT_ROOT'].'/test-basis/test-basis-example/display-field-label.php';
echo dispfieldlabel();

?>
<form action="create-sub-field.php" method="post">
  <div class="flex-cont-la">
<div class="tbf-field">
                <div class="tbf-field-name">
                <input type="text" name="name" placeholder="name" id="name" required>
                 </div> 
                  <div class="tbf-field-uid">
                <input type="text" name="uid" placeholder="uid" id="uid" required>
                 </div> 
                  <div class="tbf-field-type">
                <input type="text" name="type" placeholder="type" id="type" required>
                 </div> 
                  <div class="tbf-field-project">
                 <input type="text" name="project" placeholder="project" id="project" required>
                 </div> 
                  <div class="tbf-field-owner">
                 <input type="text" name="owner" placeholder="owner" id="owner" required>
                 </div> 
                 <div class="tbf-field-version">
               <input type="text" name="ver" placeholder="ver" id="ver" required>
                 </div> 
                 <div class="tbf-field-status">
                 <input type="text" name="stat" placeholder="status" id="stat" required>
                 </div> 
                 <div class="tbf-field-location">
                 <input type="text" name="location" placeholder="location" id="location" required>
                 </div> 
                <input type="hidden" id="userid" name="userid" value="1">
  				<input type="hidden" id="docid" name="docid" value="ITBL">
</div> 
</div> 


</div> 
  <input type="submit" value="REGISTER">
</form>




<div class="flex-cont">
<p>p</p>
</div> 


<div class="flex-cont">
<p>p</p>
</div> 

<div class="flex-cont1">
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