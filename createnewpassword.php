<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IT XPERTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>
    
    <link rel="stylesheet" href="css/drop.css">


<link rel="stylesheet" href="fontawesome-free-5.6.3-web/css/all.css" />
		<link rel="stylesheet" href="fontawesome-free-5.6.3-web/css/fontawesome.css" />
		<link rel="stylesheet" href="fontawesome-free-5.6.3-web/webfonts" />

	<link rel="stylesheet" href="css/fpass.css" />
	<script src="js/jquery-3.3.1.min.js"></script>

	<script src="js/jquery.counterup.min.js"></script>
	<script src="js/scrollreveal.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
</head>
<body>

	<div class="logo">
		
<div class="log">
	

</div>
<div class="social">
	
	<ul>
	<li><a href="#" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
	<li><a href="#" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
	<li><a href="#" target="_blank"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
<li><a href="#" target="_blank"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>



</ul>
</div>
	</div>
   <div class="header"> 

   	<nav>

   		<ul>
   				<li><a href="index.php">Home</a></li>

   			<li><a href="about.php">Who Are We &nbsp<i class="fas fa-caret-down"></i></a>
   				<ul>
   					

   					<li><a href="">Overview</a></li>
   					<li><a href="">Career</a></li>
   					<li><a href="">Partners</a></li>
   					<li><a href="">Corporate Profile</a></li>
   				</ul>

   			</li>

   			<li><a href="programmes.php">What We Do &nbsp<i class="fas fa-caret-down"></i></a>
   				<ul>   					
   					<li><a href="">Services</a></li>
   					<li><a href="">Product 2</a></li>
   					<li><a href="">Product3</a></li>
   					<li><a href="">Product 4</a></li>
   				</ul></li>
   			<li><a href="contact.php">Contact Us</a></li>

<span class="sideheader"><a href="login.php"><i class="far fa-user-circle"></a></i>&nbsp<i class="fas fa-bars bar" onclick="openSideMenu()"></i></span> 
   		</ul>
   	</nav>
 </div>

  </div>

<div id="side-menu" class="side-nav">
		<a href="#" class="btn-close" onclick="closeSideMenu()"><i class="fas fa-times"></i></a>
		<ul>
<li><a href="">Home</a></li>

   			<li><a href="about.php">Who Are We</a>
   			</li>

   			<li><a href="programmes.php">What We Do </a>

</li>
   			<li><a href="contact.php">Contact Us</a></li>

	</div>	

	<div class="login">
	<form action="processes/forgotpassword_process.php" method="post">
	
<label><input type="text" name="email" value="Enter New Password"></label>

<label><input type="text" name="email" value="Repeat New Password"></label>

<input type="submit" name="submit" value="Recover My Password">


	</form>
	</div>
<div class="footer">
	<div class="contact"><h3>Contact Us</h3>

<p>&nbsp<i class="fas fa-map-marker-alt"></i>&nbsp&nbsp 27 Airport Road Ede Plaza, Benin City, <br> &nbsp&nbsp&nbsp&nbsp Edo State, Nigeria<br></p>
<p>&nbsp<i class="fas fa-phone"></i>&nbsp&nbspPhone : +234 805 596 4598</p>
<p>&nbsp <i class="fas fa-envelope"></i>&nbsp&nbspEmail: info@.com</p>	</div>
<div class="quick"><h3>Quick Link</h3>
<ul>
	<li><a href="">Account Profile</a></li>
	<li><a href="">Careers</a></li>
	<li><a href="">About Us</a></li>
	<li><a href="">Blog</a></li>
	<li><a href="">Contact Us</a></li>
</ul>

</div>

<div class="dx"><h3>About</h3></div>
<div class="dxlogo">
	

	
</div>
</div>

<div class="copyright">
	<div class="copy"><p>©&nbsp2019 DXpertz Technology, All rights reserved.</p></div>

</div>
<span class="arrowup"><i class="fas fa-arrow-up"></i></span>
</body>
</html>

<script>
	
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
unset($_SESSION['message']);
unset($_SESSION['username']);
unset($_SESSION['password']);

?>