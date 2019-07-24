<!DOCTYPE html>
<html>
<head>

	<meta property="og:title" content="HomePage">
<meta property="og:image" content="https://dxpertz.com/images/1a.png">
<meta property="og:description" content="This Is The Digital Company - D- Xpertz Computer Technology">
<meta property="og:url" content="https://dxpertz.com">
<meta name="twitter:card" content="summary_large_image">
		<!-- Chrome, Firefox OS and Opera -->
<meta name="theme-color" content="#2980b9">
<!-- Windows Phone -->
<meta name="msapplication-navbutton-color" content="#2980b9">
<!-- iOS Safari -->
<meta name="apple-mobile-web-app-status-bar-style" content="#2980b9">

    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>D-XPERTS - The Digital Company</title>
    <link rel="shortcut icon" type="image/png" href="images/3.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>

    <link rel="stylesheet" href="css/tab.css">

 <link rel="stylesheet" href="css/newslider.css">

<link rel="stylesheet" href="css/about.css">
    <link rel="stylesheet" href="css/drop.css">

    <link rel="stylesheet" href="css/slider.css">
    <link rel="stylesheet" href="css/footer.css">


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
?>	</div>	



<!--slider area -->
<div class="sliderr">
	

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/ieltss.jpg" style="width:100%">
  <div class="text">  The IELTS test is developed by some of the world’s leading experts in language assessment. <br></div>
   <div class="link"> <a href="ielts.php">Learn More</a></div>


</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/dxp.jpeg" style="width:100%">
  <div class="text">More Than Just A Company</div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="images/blogging.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>


</div>

<div class="events">
	
	<div class="we">
		<div class="ict">
			<h2> <span class="light">Beyond</span> <br>
				<span class="bold">Computers</span></h2>
				<div class="line"></div>
			<p>Our cutting-edge education services include Information Communication Technology (ICT) training. <br/>
Our team of experienced councellors are always on ground to guide students on the right career choice.
</p>
<a href="about.php">
<button class="button"><span>ICT and More </span></button></a>
		</div>
	</div>

	<div class="we">
		<img src="images/bann.jpeg" alt="">
	</div>

	<div class="we">
		<img src="images/bannerr.jpg" alt="">
		
	</div>

	<div class="we">
		<div class="ict">
			<h2> <span class="light">More Than</span> <br>
				<span class="bold">Training</span></h2>
				<div class="line"></div>
			
			<p>We render various ICT training services ranging from Basic Computer training to professional stage leading to International Certifications. <br>We offer a wide range of programmes related to the latest technologies of IT industries. 
</p>

<a href="programmes.php">
<button class="button"><span>Programmes and More </span></button></a>
		</div>
	</div>
	
</div>
<div class="courses">
	<h3>Available Training Programmes.</h3>

<div class="tabContainer">
<div class="buttonContainer">
	
	<button onclick="showPanel(0, '#f44336')">ORACLE WDP</button>
	<button onclick="showPanel(1, '#3498db')">CISCO</button>
	<button onclick="showPanel(2, '#2ecc71')">ADOBE</button>
	<button onclick="showPanel(3, '#c0392b')">COMPTIA</button>
	<button onclick="showPanel(4, '#9b59b6')">MICROSOFT</button>
	<button onclick="showPanel(5, '#f1c40f')">OTHERS</button>
</div>



<div class="tabPanel">
ORACLE 12C <br/>
ORACLE JAVA <br/>
PHP / MYSQL <br/>
ORACLE PRIMAVERA <br/>
</div>


<div class="tabPanel">
	
CCNA <br/>
CCNP <br/>
</div>

<div class="tabPanel">
	WEB-DESIGN <br/>
CREATIVE PUBLICATION <br/>
PHP <br/>
</div>
<div class="tabPanel">
	
COMPTIA A+ <br/>
SECURITY + <br/>
COMPTIA N+ <br/>
</div>

<div class="tabPanel">
MS-OFFICE <br>
PROJECT MANAGEMENT <br>
MCSE <br>
MS SQL-DATABASE <br>
</div>
<div class="tabPanel">
	
ARCHICARD <br/>
PEACHTREE <br/>
ITIL<br/>
CISA<br/>
</div>


</div>

</div>

<div class="register">
	
	<h3>
I.T Training at D-Xpertz <br>
D-Xpertz is built to keep you connected and informed with the latest developement in the I.T world</h3>

<a href="register.php">Sign Up Now &nbsp<i class="fas fa-chevron-right"></i></a>
</div>

<div class="work"><h1>The Competitive Edge</h1>
	<p>Hard to beat, and impossible to miss.</p>

	<h3>Let's Work Together</h3></div>

<div class="middle">
	
	<div class="counting-sec">
		
		<div class="inner-width">
			<div class="col">
			<i class="far fa-smile-wink"></i>
			<div class="num">
				10000
			</div>
			Porgrammes
		</div>
		<div class="col">
			<i class="fas fa-book"></i>
			<div class="num">
				13
			</div>
			Programmes
		</div>
		<div class="col">
			<i class="fas fa-hotel"></i>
			<div class="num">
				4
			</div>
			Months Old
		</div>
		<div class="col">
			<i class="far fa-object-group"></i>
			<div class="num">
				1000
			</div>
			speaker
		</div>

		</div>
	</div>
</div>	

<div class="newabout">
	

<div class="sectiontop">
	

	<div class="aboutcontent">
		

	</div>
</div>

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
	
	var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
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
 
var tabButtons=document.querySelectorAll(".tabContainer .buttonContainer button");
var tabPanels=document.querySelectorAll(".tabContainer .tabPanel");

function showPanel(panelIndex, colorCode){
	tabButtons.forEach(function(node) {
		node.style.backgroundColor="";
		node.style.color="";
		
	});

	tabButtons[panelIndex].style.backgroundColor=colorCode;
	tabButtons[panelIndex].style.color="white";
	tabPanels.forEach(function(node){
			node.style.display="none";
	});
	tabPanels[panelIndex].style.display="block";
	tabPanels[panelIndex].style.backgroundColor=colorCode;
}

	showPanel(0, '#f44336');


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

$('.num').counterUp({delay:10,time:1000});

});

</script>