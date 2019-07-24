<?php
session_start();
require_once("config/config.php"); 

//state query
$query=mysqli_query($connection, "select * from state")
or die(mysqli_error($connection));

if(mysqli_num_rows($query)>0 )

{
	while($row=mysqli_fetch_assoc($query))

	  {
	  	$state_id[]=$row['state_id'];
        $state_name[]=$row['state_name']; 
	}

	}
$query=mysqli_query($connection, "select * from date")
or die(mysqli_error($connection));

if(mysqli_num_rows($query)>0 )

{
	while($row=mysqli_fetch_assoc($query))

	  {
	  	$date_id[]=$row['date_id'];
        $date[]=$row['date']; 
	}

	}
$query=mysqli_query($connection, "select * from month")
or die(mysqli_error($connection));

if(mysqli_num_rows($query)>0 )

{
	while($row=mysqli_fetch_assoc($query))

	  {
	  	$month_id[]=$row['month_id'];
        $month[]=$row['month']; 
	}

	}
$query=mysqli_query($connection, "select * from year")
or die(mysqli_error($connection));

if(mysqli_num_rows($query)>0 )

{
	while($row=mysqli_fetch_assoc($query))

	  {
	  	$year_id[]=$row['year_id'];
        $year[]=$row['year']; 
	}

	}

	
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


<link rel="stylesheet" href="fontawesome-free-5.6.3-web/css/all.css" />
		<link rel="stylesheet" href="fontawesome-free-5.6.3-web/css/fontawesome.css" />
		<link rel="stylesheet" href="fontawesome-free-5.6.3-web/webfonts" />

	<link rel="stylesheet" href="css/signup.css" />
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
   	<header>
   	<ul><li><a href="">Home</a></li>
    <li><a href="">Who Are We</a></li>
    <li><a href="">What We Do</a></li>
    <li><a href="">Contact Us</a></li> </ul>
</header> <div class="sideheader"><i class="far fa-user-circle"></i>

	&nbsp<i class="fas fa-bars bar"></i></div>  </div>

	<div class="signup">

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

<div class="success"><p> Account Created Successfully!</p>
</div>
<?php

unset($_SESSION['error']);
unset($_SESSION['state_id']);
unset($_SESSION['username']);
unset($_SESSION['firstname']);
unset($_SESSION['lastname']);
unset($_SESSION['email']);
unset($_SESSION['phone']);
unset($_SESSION['password']);
unset($_SESSION['date_id']);
unset($_SESSION['month_id']);
unset($_SESSION['year_id']);
unset($_SESSION['success']);
	}
?>

</div>
	<h1>Join D-Xpertz to connect with a community
of experts and endless knowlegde</h1>
	<div class="form">

    <form action="processes/registerprocess.php" method="post">
	<div  class="name">
 <input type="text" class="text <?php
    if( !isset($_SESSION['firstname']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['firstname']))
			{
echo $_SESSION['firstname'];
			}

			?>"
			 value="<?php 

			if(isset($_SESSION['firstname']))
			{
echo $_SESSION['firstname'];
			}

			?>" name="firstname" placeholder="First Name"></label></div>
			<div class="name">
<input type="text"  class="text <?php
    if( !isset($_SESSION['lastname']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['lastname']))
			{
echo $_SESSION['lastname'];
			}

			?>"
			 value="<?php 

			if(isset($_SESSION['lastname']))
			{
echo $_SESSION['lastname'];
			}

			?>" name="lastname" placeholder="Last Name"></label></div>
<div class="name"><label><input type="email" name="email" class="text <?php
    if( !isset($_SESSION['email']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['email']))
			{
echo $_SESSION['email'];
			}

			?>"
			 value="<?php 

			if(isset($_SESSION['email']))
			{
echo $_SESSION['email'];
			}

			?>" placeholder="Email"></label></div>
<div class="name"><label><input type="text" name="username" class="text <?php
    if( !isset($_SESSION['username']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['username']))
			{
echo $_SESSION['username'];
			}

			?>"
			 value="<?php 

			if(isset($_SESSION['username']))
			{
echo $_SESSION['username'];
			}

			?>" placeholder="Username"></label></div>

<div class="name"><label><input type="text" name="phone" class="text <?php
    if( !isset($_SESSION['phone']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['phone']))
			{
echo $_SESSION['phone'];
			}

			?>"
			 value="<?php 

			if(isset($_SESSION['phone']))
			{
echo $_SESSION['phone'];
			}

			?>" placeholder="Phone Number"></label></div>  
			<div class="name"><label><select class="<?php
    if( !isset($_SESSION['state_id']) && isset($_SESSION['error']) )
echo 'error';
?>" 
			name="state_id">

				<option <?php if (!isset($_SESSION['state_id'])) 

			{

				echo "selected";
			}
			
			?>

				value="">SELECT STATE</option>
				<?php
				for($a=0; $a<count($state_id); $a++)

				{
					?>
             <option <?php  if (isset($_SESSION['state_id'])) 

             {
             if ($_SESSION['state_id']==$state_id[$a]) 
             {
             
echo "selected";
             }

             }


             ?> value="<?php echo $state_id[$a] ?>">
             	
             <?php echo $state_name[$a]?>	
             </option>
				
				<?php
			}

				?>
						</select></div>

<div class="date"><label><select class="<?php
    if( !isset($_SESSION['date_id']) && isset($_SESSION['error']) )
echo 'error';
?>" 
			name="date_id">

				<option <?php if (!isset($_SESSION['date_id'])) 

			{

				echo "selected";
			}
			
			?>

				value="">Date</option>
				<?php
				for($a=0; $a<count($date_id); $a++)

				{
					?>
             <option <?php  if (isset($_SESSION['date_id'])) 

             {
             if ($_SESSION['date_id']==$date_id[$a]) 
             {
             
echo "selected";
             }

             }


             ?> value="<?php echo $state_id[$a] ?>">
             	
             <?php echo $date[$a]?>	
             </option>
				
				<?php
			}

				?>
						</select></div>

		<div class="date"><label><select class="<?php
    if( !isset($_SESSION['month_id']) && isset($_SESSION['error']) )
echo 'error';
?>" 
			name="month_id">

				<option <?php if (!isset($_SESSION['month_id'])) 

			{

				echo "selected";
			}
			
			?>

				value="">Month</option>
				<?php
				for($a=0; $a<count($month_id); $a++)

				{
					?>
             <option <?php  if (isset($_SESSION['month_id'])) 

             {
             if ($_SESSION['month_id']==$month_id[$a]) 
             {
             
echo "selected";
             }

             }


             ?> value="<?php echo $month_id[$a] ?>">
             	
             <?php echo $month[$a]?>	
             </option>
				
				<?php
			}

				?>
						</select></div>
		<div class="date"><label><select class="<?php
    if( !isset($_SESSION['year_id']) && isset($_SESSION['error']) )
echo 'error';
?>" 
			name="year_id">

				<option <?php if (!isset($_SESSION['year_id'])) 

			{

				echo "selected";
			}
			
			?>

				value="">Year</option>
				<?php
				for($a=0; $a<count($year_id); $a++)

				{
					?>
             <option <?php  if (isset($_SESSION['year_id'])) 

             {
             if ($_SESSION['year_id']==$year_id[$a]) 
             {
             
echo "selected";
             }

             }


             ?> value="<?php echo $year_id[$a] ?>">
             	
             <?php echo $year[$a]?>	
             </option>
				
				<?php
			}

				?>
						</select></div>
<div class="name"><label><input type="password" name="password" class="text <?php
    if( !isset($_SESSION['password']) && isset($_SESSION['error']) )
echo 'error';

			?>" value="<?php 

			if(isset($_SESSION['password']))
			{
echo $_SESSION['password'];
			}

			?>"
			 value="<?php 

			if(isset($_SESSION['password']))
			{
echo $_SESSION['password'];
			}

			?>" placeholder="Password"></label></div>

<h3>By clicking Register, you agree to our <a href="">Terms and Conditions</a></h3>
<input type="submit" name="submit" value="Create Account" class="btn"/>
<br><h4>Already have an account? &nbsp<a href="login.php">Log in</a></h4></div>
    </form>

		
	</div>
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
<button class="arrow"><i class="fas fa-arrow-circle-up"></i></i></button>
</body>
</html>

<script>
	
	$(document).ready(()=>{
$('.arrow').click(()=>{
	$('html ,body').animate({scrollTop: 0}, 800);
});


$('.num').counterUp({delay: 10,time: 1000});


});

</script>


<?php

unset($_SESSION['error']);
unset($_SESSION['state_id']);
unset($_SESSION['username']);
unset($_SESSION['firstname']);
unset($_SESSION['lastname']);
unset($_SESSION['email']);
unset($_SESSION['phone']);
unset($_SESSION['password']);
unset($_SESSION['date_id']);
unset($_SESSION['month_id']);
unset($_SESSION['year_id']);
unset($_SESSION['success']);
?>