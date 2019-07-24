<?php
session_start();
require_once("config/config.php"); 
//programme query


$query=mysqli_query($connection, "select * from programme")
or die(mysqli_error($connection));

if(mysqli_num_rows($query)>0 )

{
	while($row=mysqli_fetch_assoc($query))

	  {
	  	$programme_id[]=$row['programme_id'];
        $programme_name[]=$row['programme_name']; 
	}

	}


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
    <title>IT XPERTS - Register With Us</title>
    <link rel="shortcut icon" type="image/png" href="images/3.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <script src="main.js"></script>
    <link rel="stylesheet" href="css/btn.css">


    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/contact.css">

    <link rel="stylesheet" href="css/nav.css">
<link rel="stylesheet" href="css/register.css">
    
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
<div class="section">
	

<section>
	
	<div>
		<h2>Company’s Strategy</h2>
		<p>To provide cutting-edge services and build a lasting relationship with our clients through our expert and innovative technology deliverables!</p>
	<p>To empower this generation for self-reliance and sustenance through information technology!</p>
<p>To empower this generation for self-reliance and sustenance through information technology!</p></div>
		<div class="scrolldown">
			<a href="#features">
			<span></span>
			<span></span>
			<span></span></a>
		</div>
</section>

</div>

	
<a name="#features"></a>
	<div class="registerform">

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
unset($_SESSION['fullname']);
unset($_SESSION['phone']);
unset($_SESSION['email']);
unset($_SESSION['programme_id']);
unset($_SESSION['message']);
unset($_SESSION['success']);

	}
?>

</div>




<h1>Register With Us</h1>

<form method="post" action="processes/regprocess.php" >
	
<div class="regg">
	<label>Full Name:<input type="text" name="fullname" value="<?php 

			if(isset($_SESSION['fullname']))
			{
echo $_SESSION['fullname'];
			}

			?>" placeholder="Enter Your Full Name" class="<?php
    if( !isset($_SESSION['fullname']) && isset($_SESSION['error']) )
echo 'error';

			?>"></label>
</div>
<div class="regg">
	<label>Your Email: <input type="email" name="email" value="<?php 

			if(isset($_SESSION['email']))
			{
echo $_SESSION['email'];
			}

			?>" placeholder="Enter Your Email" class="<?php
    if( !isset($_SESSION['email']) && isset($_SESSION['error']) )
echo 'error';

			?>">
			</label>
</div>
<div class="regg">
	<label>Phone Number: <input type="text" name="phone" value="<?php 

			if(isset($_SESSION['phone']))
			{
echo $_SESSION['phone'];
			}

			?>" placeholder="Enter Your Phone Number" class="<?php
    if( !isset($_SESSION['phone']) && isset($_SESSION['error']) )
echo 'error';

			?>"></label>
</div>
<div class="regg">
	<label><div class="progg">Programmes:</div><select class="<?php
    if( !isset($_SESSION['programme_id']) && isset($_SESSION['error']) )
echo 'error';
?>" 
			name="programme_id">

				<option <?php if (!isset($_SESSION['programme_id'])) 

			{

				echo "selected";
			}
			
			?>

				value="">SELECT PROGRAMME:</option>
				<?php
				for($a=0; $a<count($programme_id); $a++)

				{
					?>
             <option <?php  if (isset($_SESSION['programme_id'])) 

             {
             if ($_SESSION['programme_id']==$state_id[$a]) 
             {
             
echo "selected";
             }

             }


             ?> value="<?php echo $programme_id[$a] ?>">
             	
             <?php echo $programme_name[$a]?>	
             </option>
				
				<?php
			}

				?></select>
</label></div>
<div class="regg">
	<label>Message:<textarea name="message" value="<?php 

			if(isset($_SESSION['phone']))
			{
echo $_SESSION['phone'];
			}

			?>" cols="30" rows="10" class="<?php
    if( !isset($_SESSION['message']) && isset($_SESSION['error']) )
echo 'error';

			?>"></textarea>
			</label>
</div>

<input type="submit" value="Send" class="btnnn">

</form>

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
 
 $('a[href*="#"]')

 .not('[href="#"]')
 .not('[href="#0"]')
 .click(function (event) { 
 	if(
 	location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//,'')
	&&
	location.hostname == this.hostname
 ) {
 var target = $(this.hash);
 target =target.length ? target : $('[name=]' + this.hash.slice(1) +']');
 if (target.length){
 	event.preventDefault();
 	$('html, body').animate({

 		scrollTop:target.offset().top
 	}, 1000, function(){
 		var $target = $(target);
 		$target.focus();
 		if ($target.is(":focus")) {
 			return false;
 		}
 		else{
 			$target.attr('tabindex', '-1');
 			$target.focus();
 		};
 	});


 }
}
 
});

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
unset($_SESSION['fullname']);
unset($_SESSION['phone']);
unset($_SESSION['email']);
unset($_SESSION['programme_id']);
unset($_SESSION['message']);
unset($_SESSION['success']);
?>
