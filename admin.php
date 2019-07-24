<?php
session_start();
if (isset($_SESSION['username'])){
require_once("config/config.php"); 


$username = $_SESSION['username'];

setcookie('username', $username, time()+60*60*7);

	$query=mysqli_query($connection,

	"select * from staff

	natural join date

	natural join month

	natural join year where username ='$username'");

	$row =mysqli_fetch_assoc($query);
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
</div>

</div>




</body>
</html>
