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
    <title>IT XPERTS - CCNA</title>
    <link rel="shortcut icon" type="image/png" href="images/3.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="css/btn.css">
<link rel="stylesheet" href="css/footer.css">

     <link rel="stylesheet" href="css/cours.css">
     <link rel="stylesheet" href="css/contact.css">
<!-- <link rel="stylesheet" href="css/ccna.css">
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

<img src="images/ccna.jpg" alt="">
</div>
<div class="text">
<h3>ccna</h3>
	<p>The Cisco CCNA certification, which stands for Cisco Certified Network Associate, refers to a wide range of technical specializations that Cisco offers the IT world. <br/>These industry standard certifications are favored by organizations because they demonstrate the job candidate's technical acumen and competency. <br/>
		The Cisco Certified Network Associate (CCNA) certification is the second level of Cisco's five-level career certification process. A CCNA certification certifies a technician's ability to install, set up, configure, troubleshoot and operate a medium-sized routed and switched computer network. <br/>This also includes implementing and verifying connections to a wide area network (WAN).

</p>

<a href="contact.php">register Now</a></div>


<div class="text">
		<h3>COURSE CONTENT</h3>
<p>Subjects in the curriculum include the use of frame relay, Routing Information Protocol (Version 2), Internet Protocol, Enhanced Interior Gateway Routing Protocol, virtual local area networks, access control lists and Ethernet.</p>

	<p>All CCNA-certified individuals specialize in one of seven technology paths:</p>

<p>
&#10148;Routing and switching<br/>
&#10148;Design<br/>
&#10148;Network security<br/>
&#10148;Service provider<br/>
&#10148;Storage networking<br/>
&#10148;Voice<br/>
&#10148;Wireless.<br/></p>
</div>


<div class="pic">  <img src="images/ccnacisco.png" alt=""></div>
<div class="pic">  <img src="images/ccnar.jpg" alt=""></div>

<div class="text">

	<h3>COURSE MODULES</h3>
	<p>
		An Associate-level CCNA certificate is the first step in obtaining higher Cisco certification. <br/>There are Professional certifications known as the Cisco Certified Networking Professional (CCNP) series. <br/> This covers cloud, security, wireless, collaboration and routing and switching. <br/> The next series up is the Cisco Certified Internetwork Expert (CCIE) program. <br/>Anyone of these Expert certifications is considered to be the most prestigious networking certification currently available in the IT industry.<br/>

<p>Duration: 4 months</p>

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
