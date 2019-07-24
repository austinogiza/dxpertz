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
    <title>IT XPERTS - Contact D-Xpertz</title>
    <link rel="shortcut icon" type="image/png" href="images/3.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="css/btn.css">
<link rel="stylesheet" href="css/footer.css">

    <link rel="stylesheet" href="css/contact.css">

    
    <link rel="stylesheet" href="css/drop.css">
    <link rel="shortcut icon" type="image/png" href="images/3.jpg">

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
<div class="btnbody">
	
	
	<div class="btncontact">
		
		<div class="btnbox">
			
<div class="icon"><i class="fas fa-map-marker"></i>
	
	<h4>Address</h4>
		<h3> 27 Airport Road Ede Plaza, Benin City, <br/>
     Edo State, Nigeria</h3>

</div>
		</div>

		<div class="btnbox">
			
<div class="icon">
	<i class="fas fa-phone"></i>
	<h4>Mobile</h4>
		<h3>+234 805 596 4598</h3>

</div>
		</div>


		<div class="btnbox">
			
<div class="icon">
	<i class="fas fa-envelope"></i>
	<h4>Email</h4>
		<h3>contact@dxpertz.com</h3>

</div>
		</div>
	</div>

</div>

<div class="contactpage">

<div class="alert">	</div>
<div id="nav">
<?php 

	if (isset($_SESSION['error'])) {
?>

<div class="errorclass"><p> Please Fill In All Fields</p>
</div>
<?php
}


?>

<?php 

	if (isset($_SESSION['success']) && $_SESSION['success']=='mailsent'){
?>

<div class="success"><p>Thank You, Your Mail has Been Sent!</p>
</div>
<?php

unset($_SESSION['error']);
unset($_SESSION['name']);
unset($_SESSION['phone']);
unset($_SESSION['email']);
unset($_SESSION['message']);
unset($_SESSION['success']);
	}
?>

</div>


	
<div class="items">
	
	<div class="contactform"><h1>Contact Information.</h1>
	<p>
For inquiries and more information about our programmes and updates, please kindly fill the form below with your contact details.</p> 

<form action="processes/contactprocess.php" method="post">
	
	<div><label>Name:<input type="text" name="name" class="cont <?php
    if( !isset($_SESSION['name']) && isset($_SESSION['error']) )
echo 'error';

			?>" 
			 value="<?php 

			if(isset($_SESSION['name']))
			{
echo $_SESSION['name'];
			}
			?>"></label></div>
	<div><label>Email:<input type="text" name="email" class="cont <?php
    if( !isset($_SESSION['email']) && isset($_SESSION['error']) )
echo 'error';

			?>" 
			 value="<?php 

			if(isset($_SESSION['email']))
			{
echo $_SESSION['email'];
			}
			?>"></label></div>
	<div><label>Phone:<input type="text" name="phone" class="cont <?php
    if( !isset($_SESSION['phone']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['phone']))
			{
echo $_SESSION['phone'];
			}

			?>"></label></div>
	<div><label>Message:<textarea class="<?php
    if( !isset($_SESSION['message']) && isset($_SESSION['error']) )
echo 'error';

			?>" 
			 value="<?php 

			if(isset($_SESSION['message']))
			{
echo $_SESSION['message'];
			}
			?>" name="message"></textarea></label></div>
	<input type="submit" class="contactbtn" value="Send">
</form>

</div>

	<div class="location">
		
		Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum iure eos, perferendis iste totam cupiditate iusto, est laudantium repellendus expedita! Repudiandae ducimus voluptatum explicabo necessitatibus a similique amet earum quae.
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
