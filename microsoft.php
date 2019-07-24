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
    <title>IT XPERTS - Microsoft</title>
    <link rel="shortcut icon" type="image/png" href="images/3.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="css/btn.css">

    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" href="css/contact.css">
     <link rel="stylesheet" href="css/cours.css">

    <link rel="stylesheet" href="css/nav.css">
<!-- <link rel="stylesheet" href="css/micro.css">
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
	

<div class="text"> 

<img src="images/microsoft.png" alt="">
</div>
<div class="text">
<h3>MICROSOFT OFFICE TRAINING</h3>
	<p>
		Microsoft Office is the most widely used software suite in business and office environments. <br/> It is essential if you want to keep up to date with the skills demanded by many employers and progress your career.  Our training provides a comprehensive range of Microsoft office training courses designed to train you in all aspects of Microsoft office, and the individual programs it contains such as Excel, Access, PowerPoint and Microsoft Word.<br/>
Even if you already have some basic MS Office skills our training helps you get up to date with the latest versions quickly. <br/>If you are a beginner, you can gain a comprehensive knowledge which includes realistic work-place exercises.<br/>
Duration: 72 hours


</p>

<a href="contact.php">register Now</a></div>

<div class="text"><h3>CERTIFICATE PROGRAM IN MICROSOFT OFFICE SUITE</h3>

<p>Microsoft office training is for both professionals and people that are new to the field of computer, our training will give you the expertise you need in specific product or technology. <br/>When you learn from our Microsoft certified Trainers, you can be confident that what you will learn will be accurate, complete and up to date. <br/>
New to Computer? <br/>Start by learning the fundamentals of computer technology, using the training resources provided by Microsoft.
</p>
</div>


<div class="text">  <img src="images/micro.jpg" alt=""></div>
<div class="text"> <img src="images/micro.png" alt=""></div>

<div class="text">
<h3>MODULES</h3>

	<p>&#x2725; Skills in Microsoft Word Training</p>
	<p>&#x2725; Skills in Microsoft Excel Training</p>
	<p>&#x2725; Skills in Microsoft Access Training</p>
	<p>&#x2725; Skills in Microsoft PowerPoint Training</p>
	<p>&#x2725; Skills in Microsoft Outlook Training</p>
	<p>&#x2725; Skills in Microsoft Corel Draw Training</p>

<a href="contact.php">register Now</a></div>
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
