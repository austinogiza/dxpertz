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
    <title>IT XPERTS - PMP</title>
    <link rel="shortcut icon" type="image/png" href="images/3.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="css/btn.css">


    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/contact.css">

    <link rel="stylesheet" href="css/nav.css"><!-- 
<link rel="stylesheet" href="css/pmp.css"> -->
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

<img src="images/pmpp.png" alt="">
</div>
<div class="text">
<h3>PMP</h3>
	<p>Project Management Professional (PMP) is an internationally recognized professional designation offered by the Project Management Institute (PMI). <br/>
The PMI’s standard for project management is contained in the Project Management Body of Knowledge, the PMBOK, whose first edition was released in 1996 and which has recently reached the 6th edition.<br/>
Project managers work in a wide range of industries and fields. From IT to education, just about every industry benefits from hiring project managers. <br/> And every industry wants to hire the best of the best.<br/> When hiring new employees, companies look for someone who has the ability to lead and direct various projects and multiple members of a team. <br/>
Working with project managers who are PMP certified tells companies that they have employees who have what it takes to complete projects on time and under budget.
 
</p>

<a href="contact.php">register Now</a></div>


<div class="text">
		<h3>WHY DO YOU NEED PMP CERTIFICATION?</h3>

<p> Government, commercial and other organizations employ PMP certified project managers in an attempt to improve the success rate of projects in all areas of knowledge, by applying a standardized and evolving set of project management principles. <br/>
To manage innovation in a structured way, project managers are highly requested in the work’s market, and even more so, the certified project managers. <br/>
The work of a PMP is similar to most project managers. However, the difference that a PMP refers to a precise standard, talks their own language and is able to interpret reality and interact with it with a confidence that is given by both the experience and the PMBOK. <br/>The PMP certification has reached such a level of fame that it is often inserted as a preference or a pre-requisite in the job posts prepared by the employers worldwide. <br/>Also, the salary offered to a PMP is usually higher than the one offered to a non-certified project manager.
</p>
</div>
<div class="pic">  <img src="images/pmp.png" alt=""></div>

<div class="pic">  <img src="images/pmp.jpg" alt=""></div>

<div class="text">

	<h3>WHO IS ELIGIBLE FOR PMP CERTIFICATION:</h3>
 	<p>There are two routes for eligibility to become certified:</p>

<p> 
<ol>
	
	<li>Obtain a high school diploma, an associate’s degree, or the equivalent of these from the country in which you live. Also, have at least 5 years of experience as a project manager in a professional setting with at least 7,500 hours as the leader of project tasks.</li> <br/>
	<li>Complete a bachelor’s degree and at least 3 years of experience as a project manager in a professional setting with at least 4,500 hours as the leader of project tasks.</li> <br/>
</ol></p>

<h3>WHAT IS THE FORMAT OF THE PMP EXAM?</h3>
<p>The PMP exam consists of 200 multiple choice questions. These should be completed within 4 hours. You can’t use any reference materials on the exam, but you can use scratch paper.</p>
<p>The exam questions are broken down into 5 Process Groups:</p>
<p>
	<ol><li>Initiation (13%)</li>
		<li>Planning (24%)</li>
		<li>Executing (30%)</li>
		<li>Monitoring and Controlling (25%)</li>
		<li>Closing (8%)</li>

	</ol>
</p>

<p>DURATION: 2 months <br/>
</p>
	
<a href="contact.php">register Now</a></div>
</div>
<div class="text"></div>

</div><div class="footer">
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
