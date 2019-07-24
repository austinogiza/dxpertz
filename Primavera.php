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
    <title>IT XPERTS - Primavera</title>
    <link rel="shortcut icon" type="image/png" href="images/3.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="css/btn.css">


    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/contact.css">

    <link rel="stylesheet" href="css/nav.css"><!-- 
<link rel="stylesheet" href="css/Primavera.css"> -->
    <link rel="stylesheet" href="css/cours.css">
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

<img src="images/prim.jpg" alt="">
</div>
<div class="text">
<h3>Primavera</h3>
	<p> <strong>Primavera</strong> is an enterprise project portfolio management software. <br/>It includes project management, product management, collaboration and control capabilities, and integrates with other enterprise software such as Oracle and SAP’s ERP systems.<br/> Primavera was launched in 1983 by Primavera Systems Inc., which was acquired by Oracle Corporation in 2008.<br/>
		It provides project and program management software for the Architecture, Engineering and Construction industry. <br/>Focused on project portfolio management, or PPM, Primavera's solutions let users measure progress, assure governance, improve team collaboration and prioritize project investments and resources.

</p>

<a href="contact.php">register Now</a></div>


<div class="text">
		<h3>COURSE CONTENT</h3>
	<p>The course covers the following topics:</p>
<p>
&#10148;Understanding P6 Data<br/>
&#10148;Enterprise Project Structure<br/>
&#10148;Creating a Project<br/>
&#10148;Creating a Work Breakdown Structure<br/>
&#10148;Adding Activities<br/>
&#10148;Creating Relationships<br/>
&#10148;Scheduling<br/>
&#10148;Assigning Constraints<br/>
&#10148;Using Reflection Projects<br/>
&#10148;Formatting Schedule Data<br/>
&#10148;Roles and Resources<br/>
&#10148;Assigning Roles<br/>
</p>
</div>
<div class="pic">  <img src="images/primavera.jpg" alt=""></div>

<div class="pic">  <img src="images/prime.jpg" alt=""></div>

<div class="text">

	<h3>COURSE MODULES</h3>
	<p>Primavera's software packages include P6, Prosight, Contract Manager, Cost Manager, Pertmaster, SureTrak, Evolve and Inspire.<br/>The newest addition to the suite of project management solutions is Primavera P6, which is an integrated PPM (project portfolio management) solution that provides a real-time view of portfolio performance.<br/>P6 also offers what-if scenario modeling, tabular scorecards and capacity analysis.</p>
<p>Duration: 2 months</p>

	<p>This course also covers:</p>

<p>
	&#10148;Assigning Resources<br/>
&#10148;Analysing Resources.<br/> 
&#10148;Optimizing the Project Plan<br/>
&#10148;Baselining the Project Plan<br/>
&#10148;Project Execution and Control<br/> 
&#10148;Reporting Performance<br/> 

</p>

</p>
<a href="contact.php">register Now</a></div>
</div>
<div class="text"></div>

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
