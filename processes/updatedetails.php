<?php
session_start();

$username = $_SESSION['username'];

require_once("../config/config.php");
if (isset($_POST['firstname']) && trim($_POST['firstname'])!= "" )
{
$firstname=$_POST['firstname'];
$_SESSION['firstname']= $firstname;

}
else{

	$_SESSION['errordets']= "";

}

if (isset($_POST['lastname']) && trim($_POST['lastname'])!= "" )
{
$lastname=$_POST['lastname'];
$_SESSION['lastname']= $lastname;

}
else{

	$_SESSION['errordets']= "";

}

if (isset($_POST['phone']) && trim($_POST['phone'])!= "" )
{
$phone=$_POST['phone'];
$_SESSION['phone']= $phone;
}
else{

	$_SESSION['errordets']= "";

}


if (isset($_POST['email']) && trim($_POST['email'])!= "" )
{
$email=$_POST['email'];
$_SESSION['email']= $email;
}
else{

	$_SESSION['errordets']= "";

}

if (isset($_SESSION['errordets'])) 

{
	//redirect user back to registration page
	
header("location: ../profile.php");
}

else {
//save user details to database
	
	mysqli_query($connection, "update personnel set firstname='$firstname', lastname='$lastname', email='$email', phone='$phone' where username='$username'"
	) or die(mysqli_error($connection));

	$_SESSION['success']='update';
	   header("location: ../profile.php");

   exit("Account Details Update Successful");

}



?>
