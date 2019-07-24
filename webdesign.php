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
    <title>IT XPERTS - Webdesign</title>
    <link rel="shortcut icon" type="image/png" href="images/3.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="css/btn.css">

    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" href="css/contact.css">

    <link rel="stylesheet" href="css/nav.css"><!-- 
<link rel="stylesheet" href="css/webdesign.css">
 -->
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

<img src="images/webdesign.jpg" alt="">
</div>
<div class="text broadd">
<h3>Web Design</h3>
	<p>Be it large cooperate or small and medium scale offices, every business needs a website for organization to manage their transactions online, enhance service delivery reach out to a wider audience This course provides you with the skills and project-based experience needed for entry into web design and development careers. <br/> You will be able to use a variety of strategies and tools to create websites.<br/> You will understand the principles of creating an effective web page, including an in-depth consideration of information architecture. <br/>This course will introduce you to the realm of web design. The first and necessary step for that goal is to understand how HTML works, Topics covered are web history, website organization, HTML, graphics use, page and Students produce a website to showcase future web work effective use of format and design for printing documents. <br/>You will also learn CSS which is the styling markup language of websites, web apps and hybrid mobile apps. 
</p>


<a href="contact.php">register Now</a></div>


<div class="text">
		<h3>Broad objectives:</h3>
		<p> Students will learn CSS' role in creating user interface (for mobile) and websites. <br/>Students will learn the basic CSS concepts: selectors, CSS properties, CSS code structure, CSS declarations, CSS unit types etc.
</p>
<p>
<p>
	<strong>DURATION:</strong> 3 MONTHS.
</p>

<p><strong>CERTIFICATE:</strong> Certificate in Adobe Dreamweaver, Flash, CSS and HTML.</p>
<p><strong>ELIGIBILITY CRITERIA: </strong>Basic knowledge of computers and working with Internet. Ability to interact in English in classroom environment</p>
<p><strong>JOB OPPORTUNITIES:</strong>
Professional web designer, graphic and animation experts
</p>
</div>
<div class="pic">  <img src="images/web-designing.jpg" alt="python-programming"></div>

<div class="pic">  <img src="images/webdesigning.png" alt=""></div>

<div class="text">

<h3>	GRAPHIC DESIGN:</h3>
<ol>
	
<li>Working with bitmaps</li>
<li>Creating vector images</li>
<li>Working with text</li>
<li>Working with layers</li>
<li>Creating interactive buttons</li>
<li>Creating slices and hotspots</li>
<li>Optimizing for export</li>
<li>Creating G/F Animations</li>
</ol>

	
<a href="contact.php">register Now</a></div>

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
