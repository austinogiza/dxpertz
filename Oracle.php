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
    <title>IT XPERTS - Oracle</title>
    <link rel="shortcut icon" type="image/png" href="images/3.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="css/btn.css">


    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/contact.css">

    <link rel="stylesheet" href="css/nav.css"><!-- 
<link rel="stylesheet" href="css/oracle.css"> -->
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

<img src="images/oracle.jpg" alt="">
</div>
<div class="text">
<h3>Oracle Database </h3>
	<p>
		The Oracle Database is a high-performance, enterprise-class database, this is "the first database. Oracle Database introduces 500 new features to the database, most notably pluggable databases and multitenant architecture.<br/> Oracle is doing everything to jump into the cloud bandwagon.<br/> With 12C, Oracle is trying to address the problem of Multitenancy through this feature. <br/>There is a radical change and a major change in the core database architecture through the introduction of Container Databases also called CBD and Pluggable Databases (PDB). <br/>The memory and process is owned by the Container Database. <br/>The container holds the metadata where the PDBs hold the user data. <br/>You can create upto 253 PDBs including the seed PDB.  In a large setup, it is common to see 20 or 30 different instances running in production environment. <br/>With these many instances, it is a maintenance nightmare as all these instances have to be separately with Pluggable Databases feature, you just have to do all this for ONE single instance.
		<br/>
		Oracle SQL features will help you query and manipulate data within the database, use the dictionary views to retrieve metadata and create reports about their schema objects. <br/>
Oracle Enterprise Manager provides a consolidated platform for provisioning database services via self-service model enabling elasticity. it provides accountability for database usage that covers the latest database services and capabilities.
<br/>
		DURATION : 168HRS

</p>

<a href="contact.php">register Now</a></div>

<div class="text"><h3>ORACLE DATABASE 12C: ADMIN, INSTALL AND UPGRADE ACCELERATED</h3>

<p>In this course, you will be acquainted with Oracle Database Cloud Service.<br/>
This course will show you about the Oracle Database engineering and you will find how to viably deal with an Oracle Database case. <br/> You will likewise be given key data on the best way to introduce and regulate Oracle Database 12c.

</p>
<p>CERTIFICATE TITLE: ORACLE DATABASE ADMINISTRATOR <br/>
<br/>
PREREQUISITE: UNDERGRADUATES, GRADUATES, GRADUATE TRAINEE, EXPERIENCE WORKERS.
<p>EXIIT PROFILE</p>
<p>
UPON COMPLETION OF THE PROGRAM, STUDENTS WILL BE ABLE TO</p>
<p>WORK WITH LINUX</p>
<p>CREATE AND EXECUTE SQL QUERIES</p>
<p>MANAGE AND ADMINISTER ORACLE DATABASES
</p>
</div>


<div class="pic">  <img src="images/orac.jpeg" alt=""></div>
<div class="pic"> <img src="images/orcc.jpg" alt=""></div>

<div class="text">
<h3>Upon Completion of this Course, you will accomplish the following:-</h3>

	<p>&#x2714; Understand the basic concepts of relational databases ensure refined code by developers.</p>
	<p>&#x2714; Create reports of sorted and restricted data.</p>
	<p>&#x2714; Run data manipulation statements (DML).</p>
	<p>&#x2714; Control database access to specific objects.</p>
	<p>&#x2714; Manage schema objects.</p>
	<p>&#x2714; Manage objects with data dictionary views.</p>
	<p>&#x2714; Retrieve row and column data from tables.</p>
	<p>&#x2714; Manage objects with data dictionary views.</p>
	<p>&#x2714; Control privileges at the object and system level.</p>
	<p>&#x2714; Create indexes and constraints alter existing schema objects.</p>
	<p>&#x2714; Create and query external tables.</p>
	<p>&#x2714; Manage Oracle Database Storage structures.</p>
	<p>&#x2714; Install Oracle Database 12c software.</p>
	<p>&#x2714; Create an Oracle Database.</p>
	<p>&#x2714; Create a container database.</p>
	<p>&#x2714; Monitor the Database.</p>
	<p>&#x2714; Manage Database Performance.</p>
	<p>&#x2714; Implement Database Auditing.</p>
	<p>&#x2714; Configure the Database Instance Such That Resources Are Appropriately Allocated Among Sessions and Tasks.</p>
	<p>&#x2714; Schedule Jobs to Run Inside or Outside of the Database.</p>
	<p>&#x2714; Configure Oracle Net Services.</p>
	<p>&#x2714; Configure your Database For Backup and Recovery Operations.</p>
	<p>&#x2714; Describe Oracle Database Architecture.</p>
	<p>&#x2714; Manage the Oracle Database Instance.</p>



<a href="contact.php">register Now</a></div>
</div>
<div class="text"></div>
</div>
<div class="footer"><?php
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
