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
    <title>IT XPERTS - Python</title>
    <link rel="shortcut icon" type="image/png" href="images/3.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="css/btn.css">


    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/contact.css">
<link rel="stylesheet" href="css/cours.css">
    <link rel="stylesheet" href="css/nav.css"><!-- 
<link rel="stylesheet" href="css/python.css"> -->
    
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

<img src="images/python.jpg" alt="">
</div>
<div class="text">
<h3>Python</h3>
	<p>Python is an interpreted, high-level, general-purpose programming language. <br/>Created by Guido van Rossum and first released in 1991, Python's design philosophy emphasizes code readability with its notable use of significant whitespace. <br/>Its language constructs and object-oriented approach aims to help programmers write clear, logical code for small and large-scale projects.<br/>
		Python is dynamically typed and garbage-collected.<br/> It supports multiple programming paradigms, including procedural, object-oriented, and functional programming. Python is often described as a "batteries included" language due to its comprehensive standard library.
</p>

<a href="contact.php">register Now</a></div>


<div class="text">
		<h3>What Can You Do With Python</h3>
		<p>Python is intended for;
</p>
<p>
	
	<ol>
		
		<li>Beginners who have no knowledge of programming</li> <br/>
		<li>Computer Programmers</li><br/>
		<li>Web Developers</li><br/>
		<li>Data Scientist</li><br/>
		<li>Mathematicians/Statisticians</li><br/>
		<li>Software Developers</li><br/>
	</ol>
</p>
<p>
	Python <strong> Duration:</strong> 6 months
</p>
</div>
<div class="pic">  <img src="images/python-programming.jpg" alt="python-programming"></div>

<div class="pic">  <img src="images/pythonn.jpg" alt=""></div>

<div class="text">

	<h3>Python Syllabus</h3>
	<p>&#x2714; Introduction to Programming Languages<br/>
&#x2714; Python Basics. <br/>
	&#x2714; Variables and Data Types.<br/>
	&#x2714; Control Structures.<br/>
	&#x2714; Functions and Modules.<br/>
	&#x2714; Strings<br/>
	&#x2714; Lists<br/>
	&#x2714;File Input and Output<br/>
	&#x2714;Dictionaries<br/>
	&#x2714;Object-Oriented Programming<br/>
	&#x2714;GUI<br/>
&#x2714;Database Connection </p>

	
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
