<?php
session_start();

if (isset($_SESSION['username'])){

require_once("config/config.php"); 

$username = $_SESSION['username'];

$query=mysqli_query($connection,

	"select * from staff

	natural join date

	natural join month

	natural join year where username ='$username'");

	$row =mysqli_fetch_assoc($query);

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
}



else{
	$_SESSION['message']='authorize';
	header("location:adminlogin.php");

	}
?>
<!doctype html>
<html>

<head>
	    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IT XPERTS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="main.js"></script>

    <link rel="stylesheet" href="css/tab.css">
	<link rel="stylesheet" href="css/signup.css" />
<link rel="stylesheet" href="fontawesome-free-5.6.3-web/css/all.css" />
		<link rel="stylesheet" href="fontawesome-free-5.6.3-web/css/fontawesome.css" />
		<link rel="stylesheet" href="fontawesome-free-5.6.3-web/webfonts" />
	<script src="js/jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/dashboard.css">
<meta charset="utf-8">
<title>My Dashboard</title>
</head>

<body>
<div class="user">
	
	<div class="student">Welcome <?php 
		echo $_SESSION['username'];

		?>!!</div>
</div>
	<div class="nav">
		
		<div class="logout"><a href="processes/adminlogoutprocess.php"><i class="fas fa-sign-out-alt"></i>&nbspLogout</a></div>
	</div>
<div class="new">
	
			<div class="middle">
<?php
 require_once('includes/adminmenu.php');
?>
</div>

<div class="side"> 

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
	
	<div class="signup-form">
		<h1>Add New Staff</h1>

    <form action="processes/registerprocess.php" method="post">
    	<div>
 <input type="text" class="txtb <?php
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
<input type="text"  class="txtb <?php
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
<div class="name"><label><input type="email" name="email" class="txtb <?php
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
<div class="name"><label><input type="text" name="username" class="txtb <?php
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

<div class="name"><label><input type="text" name="phone" class="txtb <?php
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
			<div class="name"><label><select class="state <?php
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

<div class="date"><label><select class="dtb <?php
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

		<div class="date"><label><select class="dtb <?php
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
		<div class="date"><label><select class="dtb <?php
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
<div class="name"><label><input type="password" name="password" class="txtb <?php
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

			?>" placeholder="Password" /></label></div>
			<input type="submit" name="submit" value="Create Account" class="signup-btn"/>

</form>

	</div>
</div>
</div>


</body>
</html>


<?php

unset($_SESSION['error']);
unset($_SESSION['state_id']);
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