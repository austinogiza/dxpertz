<?php
session_start();
require_once("config/config.php"); 
?>

<!DOCTYPE html>
<html>
<head>
		<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#2980b9">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#2980b9">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#2980b9">

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IT XPERTS</title>
    <link rel="shortcut icon" type="image/png" href="images/3.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="css/btn.css">
<link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" href="css/contact.css">
 <link rel="stylesheet" href="css/cours.css">
    <link rel="stylesheet" href="css/nav.css">
<!-- <link rel="stylesheet" href="css/auto.css"> -->
    
    <link rel="stylesheet" href="css/drop.css">

<link rel="stylesheet" href="fontawesome-free-5.6.3-web/css/all.css" />
		<link rel="stylesheet" href="fontawesome-free-5.6.3-web/css/fontawesome.css" />
		<link rel="stylesheet" href="fontawesome-free-5.6.3-web/webfonts" />
	<script src="js/jquery-3.3.1.min.js"></script>

	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/scrollreveal.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
</head>
<body>

	<div class="logo">
		
<div class="log">
	<?php
 require_once('includes/logo.php');
?>

</div>
<div class="social">
	<?php
 require_once('includes/social.php');
?>
</div>
	</div>
     <div class="header"> 
<?php
 require_once('includes/dropdown.php');
?>
	</div>

<div class="phpbody">
	

<div class="pic"> 

<img src="images/autocad.png" alt="">
</div>
<div class="text">
<h3>AutoCad</h3>
	<p>
		AutoCAD is a computer aided design (CAD) program used for 2-D and 3-D design and drafting.  <br/>AutoCAD is developed and marketed by Autodesk Inc. and was one of the initial CAD programs that could be executed on personal computer. <br/> AutoCAD is the golden standard for Autodesk technology and application throughout. Autodesk is the world number one supplier of different application (software) such as AutoCAD, ArchiCAD, Revit, etc. <br/>
Duration: 36 hours


</p>

<a href="contact.php">register Now</a></div>

<div class="text"><h3>AutoCad</h3>

<p>AutoCAD application is found in almost all the building and construction companies in the world. <br/> With the introduction of different versions of AutoCAD, Autodesk has made AutoCAD a user friendly and robust application which has made all AutoCAD users highly skillful when using AutoCAD to create drawings.
</p>

</div>


<div class="pic">  <img src="images/autocad.jpg" alt=""></div>
<div class="pic"> <img src="images/auto.jpg" alt=""></div>

<div class="text">
<h3>OBJECTIVES</h3>

	<p>&#x2725; To employ the skills of drawing in two and three Dimensions.</p>
	<p>&#x2725; To construct a building and road plans in a special way.</p>
	
<h3>CERTIFICATION</h3>
	<p>&#x2725; Autodesk offers a range of certification options to help you achieve your goals, including certification for industry professionals, Students and Instructors.</p>
	<p>&#x2725; Students and professionals wishing to receive Autodesk certification in Autodesk software can pursue two pathways.</p>
</div>


<div class="text">
<h3>MODULES</h3>
<p>&#x2726; Learning Tools and Certification. <br/>
&#x2726; Creating of Mechanical Drawings.<br/>
&#x2726;	Creating of Electrical Drawings.<br/>
&#x2726; Creating of Engineering drawings.<br/> </p>
	<h3>AUTODESK CERTIFIED USER</h3>

	<p>This certification are for those who are relatively new to Autodesk software and want to demonstrate basic proficiency, can seek to become certified users.</p>

<a href="contact.php">register Now</a></div>
<div class="pic spec"> <img src="images/AutoCAD-professional.jpg" alt=""></div>

</div>
<div class="footer">
<?php
require_once("includes/footer.php");
?>
</div>

<span class="arrowup"><i class="fas fa-arrow-up"></i></span>
</body>
</html>
<script>
		//* sidebar dropdown */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
	
	
function openSideMenu() {

	document.getElementById('side-menu').style.width="250px";
	document.getElementById('main').style.marginleft="250px";
}	
 function closeSideMenu ()
 {

 	document.getElementById('side-menu').style.width="0px";
 	document.getElementById('main').style.marginleft="0px";
 	

 }

	$(document).ready(()=>{

 $(window).scroll(()=>{

	if($(this).scrollTop() >40)
	{
		$('.arrowup').fadeIn();
}

else{
$('.arrowup').fadeOut(); 
}

});

$('.arrowup').click(()=>{
	$('html ,body').animate({scrollTop: 0}, 800);
});


});

</script>


<?php
unset($_SESSION['error']);
unset($_SESSION['name']);
unset($_SESSION['phone']);
unset($_SESSION['email']);
unset($_SESSION['message']);
unset($_SESSION['success']);
?>
