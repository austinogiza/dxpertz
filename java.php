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
    <title>IT XPERTS - JAVA</title>
    <link rel="shortcut icon" type="image/png" href="images/3.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="css/btn.css">
<link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" href="css/contact.css">
     <link rel="stylesheet" href="css/cours.css">

    <link rel="stylesheet" href="css/nav.css">
<!-- <link rel="stylesheet" href="css/java.css">
 -->    
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

<img src="images/java.png" alt="">
</div>
<div class="text">
<h3>Java</h3>
	<p>Java is a general-purpose computer-programming language that is concurrent, class-based, object-oriented, and specifically designed to have as few. <br/> 
Java is a high-level programming language developed by Sun Microsystems. <br/> The Java syntax is similar to C++, but is strictly an object-oriented programming language. <br/> For example, most Java programs contain classes, which are used to define objects, and methods, which are assigned to individual classes. <br/>
Java is more powerful programming language because it support the pure object oriented programming language (means the class and object concept). <br/> Python has a less pronounced learning curve and it is a language one can love, because of its beauty. Java does some things better than python, as multi-threading.

</p>

<a href="contact.php">register Now</a></div>


<div class="text">
		<h3>Who Created Java?</h3>

<p>In the early 90s, Java, which originally went by the name Oak and then Green, was created by a team led by James Gosling for Sun Microsystems, a company now owned by Oracle. <br/>
Java was originally designed for use on digital mobile devices, such as cellphones. However, when Java 1.0 was released to the public in 1996, its main focus had shifted to use on the internet, providing interactivity with users by giving developers a way to produce animated web pages. <br/>
However, there have been many updates since version 1.0, like J2SE 1.3 in 2000, J2SE 5.0 in 2004, Java SE 8 in 2014, and Java SE 10 in 2018. <br/>
Over the years, Java has evolved as a successful language for use both on and off the internet. <br/>
Java is good to learn Object Oriented programming, but not so good for procedural one, prefer C there. <br/>The OOP or Object Oriented programming is auseful skill because it handles the complexity of a real-world application quite well. <br/>It's easier to think in terms of class and objects.

</p>

<p>The team at Sun Microsystems was successful in combining these key principles, and Java's popularity can be traced to it being a robust, secure, easy to use, and portable programming language.</p>
</div>
<div class="pic">  <img src="images/java.jpeg" alt=""></div>

<div class="pic">  <img src="images/java.jpg" alt=""></div>

<div class="text">

	<h3>Why Choose Java?</h3>
 	<p>Java was designed with a few key principles in mind:</p>

<p> 
<ul>
	
<li><strong>Ease of Use:</strong> The fundamentals of Java came from a programming language called C++. Although C++ is a powerful language, it is complex in its syntax and inadequate for some of Java's requirements. Java built on and improved the ideas of C++ to provide a programming language that was powerful and simple to use.</li> <br/>
<li> <strong>Reliability: </strong>Java needed to reduce the likelihood of fatal errors from programmer mistakes. With this in mind, object-oriented programming was introduced. When data and its manipulation were packaged together in one place, Java was robust.</li> <br/>
<li><strong>Security:</strong> Because Java was originally targeting mobile devices that would be exchanging data over networks, it was built to include a high level of security. Java is probably the most secure programming language to date.</li> <br/>
<li> <strong>Platform Independence:</strong> Programs need to work regardless of the machines they're being executed on. Java was written to be a portable and cross-platform language that doesn't care about the operating system, hardware, or devices that it's running on.</li>
</ul></p>

</div>

<div class="text">
<h3>Advantages of Java</h3>
<p>Java was designed to be easy to use, write, compile, debug, and learn than other programming languages. <br/>Object-Oriented: Allows you to create modular programs and reusable code. <br/>Platform-Independent: Ability to move easily from one computer system to another</p>
<p>
	<ol><li>Simple: The Java language is easy to learn. </li> <br/>
		<li>Familiar: Java is similar to C/C++ but it removes the drawbacks and complexities of C/C++ like pointers and multiple inheritances</li><br/>
		<li>Object-Oriented</li><br/>
		<li>Robust</li><br/>
		<li>Secure </li><br/>
		<li>High Performance</li> <br/>
		<li>Multithreaded</li> <br/>
		<li>Platform Independence</li>

	</ol>
</p>

	
<a href="contact.php">register Now</a></div>

<div class="pic"><img src="images/javaa.png" alt=""></div>
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
