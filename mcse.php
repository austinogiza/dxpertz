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
    <title>IT XPERTS - MCSE</title>
    <link rel="shortcut icon" type="image/png" href="images/3.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="css/btn.css">

    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" href="css/contact.css">

    <link rel="stylesheet" href="css/nav.css">
<!-- <link rel="stylesheet" href="css/mcse.css"> -->
    
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
<div class="pic"> <img src="images/mcse.jpg" alt=""></div>
<div class="text">
<h3>MCSE 2012</h3>
	<p>The Microsoft Certified Solution Expert (MCSE): Server Infrastructure Certification validates that you have the skills needed to run a highly efficient and modern data center, with expertise in identity management, virtualization, storage and networking. <br/>It is globally recognized standard for IT professionals. <br/> Earning this certification will qualify you for jobs as computers support specialists and information security analyst.
</p>


<a href="contact.php">register Now</a></div>
<div class="text">
		<h3>MCSE: SERVER INFRASTRUCTURE</h3>
		<h4>COURSE CONTENT:</h4>
		<p> Course 20410: Installing and configuring Windows server 2012 <br/> At course completion, after completing this course, students should be able to:</p>
<p>                                              
&#x2727;Install and configure Windows server 2012 <br/>    
&#x2727;Describe AD DS                            <br/>                   
&#x2727;Manage active Directory administration  <br/>            
&#x2727;Implement IPv4                          <br/>                          
&#x2727;Implement Dynamic Host Configuration 
Protocol (DHCP)<br/>
&#x2727;Implement Domain Name System (DNS)<br/>
&#x2727;Implement Ipv6<br/>
&#x2727;Implement local storage<br/>
&#x2727;Implement file and print services<br/>
&#x2727;Implement Group Policy<br/>
&#x2727;Secure Windows servers by using Group 
Policy Objects (GPOs)<br/>
&#x2727;Implement server virtualization by using 
Hyper-v<br/>
</p>
</div>
<div class="pic">  <img src="images/mcse.jpeg" alt="python-programming"></div>

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
