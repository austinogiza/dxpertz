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
    <title>IT XPERTS - PHP</title>
    <link rel="shortcut icon" type="image/png" href="images/3.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="css/btn.css">


    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/contact.css">

    <link rel="stylesheet" href="css/nav.css"><!-- 
<link rel="stylesheet" href="css/phppg.css"> -->
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

<img src="images/php.jpg" alt="">
</div>
<div class="text">
<h3>PHP/MYSQL</h3>
	<p>PHP can help you make your websites more dynamic and interactive and broaden your understanding of how servers work. <br/>Anyone can get started using PHP. <br/>
PHP is a server scripting language designed for web development but also used as a general purpose programming language PHP which stands for HYPERTEXT PREPROCESSOR is a very powerful, useful and easy to use programming Language to develop web applications. <br/>MYSQL on the other hand is the world’s most popular open source Relational database management system. <br/> It is widely used for web applications. <br/>It should be noted that over 70% of the world dynamics websites today are developed using PHP/MYSQL. <br/>This is due to the power and simplicity of both technologies i.e PHP/MYSQL.

</p>

<a href="contact.php">register Now</a></div>

<div class="text"><h3>COURSE CONTENT</h3>

<p>
&#10148;Design static websites using HTML AND CSS <br/>
&#10148;Use development tools such as Adobe Dreamweaver for Website . <br/>
&#10148;Manage and understand Relational Database Management system using Mysql database as case study.<br/>
&#10148;Use PHP to add dynamism to websites <br/>
&#10148;Understand the use of object oriented Javascript for adding dynamism to the web pages<br/>
&#10148;Develop an enterprise-driven application that works on a local area network<br/></p>
<h3>AUDIENCE PROFILE</h3>
	
	<p>

This course is intended for the following persons<br/>
&#10148;Beginner  <br/>
&#10148;Web designers<br/>
&#10148;Web Administrator<br/>
&#10148;Etc.</p>
</div>


<div class="pic">  <img src="images/phpimg.jpg" alt=""></div>
<div class="pic">  <img src="images/phpimg2.jpg" alt=""></div>

<div class="text">

	<h3>COURSE MODULES</h3>
	<p>
&#10148;Introducing the Internet and the world wide web (WWW) <br/>
&#10148;Designing a static website-HTML and CSS <br/>
&#10148;Relational Database Management system (RDMS)- MYSQL<br/>
&#10148;Fundamentals of programming-PHP<br/>
&#10148;Core PHP Concept<br/>
&#10148;PHP and Resource Management – Using files and Database<br/>
&#10148;Handling Errors in PHP<br/>
&#10148;The big picture projects<br/>
&#10148;Javascript – object – oriented programming concept (OOP), firm validation using Javascript<br/>
<p>JOB OPPORTUNITIES: WEB DEVELOPER, PORTAL DEVELOPER</p>
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
