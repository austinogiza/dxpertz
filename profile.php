<?php
session_start();
if (isset($_SESSION['username'])){
require_once("config/config.php"); 

$username = $_SESSION['username'];

setcookie('username', $username, time()+60*60*7);
	$query=mysqli_query($connection,

	"select * from personnel

	natural join date

	natural join month

	natural join state

	natural join year where username='$username'");

	$row=mysqli_fetch_assoc($query);

}

else{


	$_SESSION['message']='authorize';
	header("location:login.php");
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

    <link rel="stylesheet" href="css/profile.css">
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
		
		<div class="logout"><a href="processes/logoutprocess.php"><i class="fas fa-sign-out-alt"></i>&nbspLogout</a></div>
	</div>

<div class="new">
	
			<div class="middle">
<?php
 require_once('includes/menu.php');
?>
</div>


<div class="side"> 
<h2>Your Personal Data</h2>
	<div class="profpic">

		<form action="processes/upload.php" method="post">
			
	<input type="file" name="image" id="image">
	<input type="submit" value="Upload Photo">		
		</form>
	</div>
<div id="nav">
<?php 

	if (isset($_SESSION['errordets'])) {
?>

<div class="errorclass"><p> Please Fill In All Fields</p>
</div>
<?php
}


?>

<?php 

	if (isset($_SESSION['success']) && $_SESSION['success']=='update'){
?>

<div class="success"><p>Account Details Updated</p>
</div>
<?php

unset($_SESSION['errordets']);
unset($_SESSION['name']);
unset($_SESSION['number']);
unset($_SESSION['budget']);
unset($_SESSION['email']);
unset($_SESSION['message']);
unset($_SESSION['success']);
	}
?>

</div>

	<div class="form">

	
<form action="processes/updatedetails.php" method="post">

<div class="profile">First Name:<input type="text" name="firstname" value="<?php echo $row['firstname'];?>"/></div>

<div class="profile">Last Name:<input type="text" name="lastname"  value="<?php echo $row['lastname'];?>"/></div>

<div class="profile">Phone Number:<input type="text" name="phone" value="<?php echo $row['phone'];?>"/></div>

<div class="profile">Email:<input type="text"  name="email" value="<?php echo $row['email'];?>"/></div>
<div class="profile">Username:<input type="text"  disabled value="<?php echo $row['username'];?>"/></div>

<div class="profile">Date Of Birth:<input type="text"  readonly value="<?php echo $row['date'];?> <?php echo $row['month'];?> <?php echo $row['year'];?> "/></div>


<div class="profile">State:<input type="text"  readonly value="<?php echo $row['state_name'];?>"/></div>

<div class="profile"><input type="submit" value="Save"></div>
</form>

	</div>

	
<h3>Password</h3>
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

	if (isset($_SESSION['message']) && $_SESSION['message']=='incorrect') {
?>

<div class="errorclass"><p> Passwords Do Not Match</p>
</div>
<?php
}


?>


<?php 

	if (isset($_SESSION['successpwd']) && $_SESSION['successpwd']=='password'){
?>

<div class="success"><p>Password Successfully Changed</p>
</div>
<?php

unset($_SESSION['error']);
unset($_SESSION['successpwd']);
unset($_SESSION['name']);
unset($_SESSION['number']);
unset($_SESSION['budget']);
unset($_SESSION['email']);
unset($_SESSION['message']);

	}
?>

</div>

<div class="form">
	<form action="processes/updatepwd.php"  method="post">

<div class="profile"><input type="text" name="password" class="newpassword" placeholder="New Password" /></div>
<div class="profile"><input type="text" name="repeatpassword" class="newpassword" placeholder="Repeat Password" /></div>

<input type="submit" class="password" value="Change Password">
</form>

</div></div>


</body>
</html>

<script>
	
		$(document).ready(()=>{

			
		});
</script>


<?php
unset($_SESSION['errordets']);
unset($_SESSION['error']);
unset($_SESSION['name']);
unset($_SESSION['number']);
unset($_SESSION['budget']);
unset($_SESSION['email']);
unset($_SESSION['message']);
unset($_SESSION['success']);
unset($_SESSION['successpwd']);
?>
