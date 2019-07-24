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
    <title>IT XPERTS - SQLServer</title>

    <link rel="shortcut icon" type="image/png" href="images/3.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="css/btn.css">

    <link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" href="css/contact.css">

    <link rel="stylesheet" href="css/nav.css"><!-- 
<link rel="stylesheet" href="css/SQLServer.css"> -->
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

<img src="images/sqlserver.jpg" alt="">
</div>
<div class="text">
<h3>SQL Server</h3>
	<p> <strong>SQL Server</strong> is a data engine introduced by Microsoft. It provides an environment used to create and manage databases. <br/> It allows secure and efficient storage. <br/> It provides other components and services that support the business intelligence platform to generate reports and help analyze the data. <br/>
		Similar to other RDBMS software, SQL Server is built on top of SQL, a standard programming language for interacting with the relational databases. <br/> SQL server is tied to Transact-SQL, or T-SQL, the Microsoft’s implementation of SQL that adds a set of proprietary programming constructs.
</p>

<a href="contact.php">register Now</a></div>


<div class="text">
		<h3>FUNCTIONS OF SQL</h3>

<p>
&#10148;Understand the basic concepts of relational databases ensure refined code by developers.<br/>
&#10148;Create reports of sorted and restricted data.<br/>
&#10148;Run data manipulation statements (DML).<br/>
&#10148;Control database access to specific objects.<br/>
&#10148;Manage schema objects.<br/>
&#10148;Manage objects with data dictionary views.<br/>
&#10148;Retrieve row and column data from tables.<br/>
&#10148;Control privileges at the object and system level.<br/>
&#10148;Create indexes and constraints alter existing schema objects.<br/>
&#10148;Create and query external tables.<br/>
</p>
</div>
<div class="pic">  <img src="images/sqlserverr.jpg" alt=""></div>

<div class="pic">  <img src="images/SQLSERVE.jpg" alt=""></div>

<div class="text">

	<h3>COURSE MODULES</h3>
 	<p>SQL Server works exclusively on Windows environment for more than 20 years. In 2016, Microsoft made it available on Linux. SQL Server 2017 became generally available in October 2016 that ran on both Windows and Linux.</p>
<p>Duration: 4 months</p>

	
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
