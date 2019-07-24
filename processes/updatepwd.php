<?php
session_start();

$username = $_SESSION['username'];
$repeatpassword = $_POST['repeatpassword'];

require_once("../config/config.php");
if (isset($_POST['password']) && trim($_POST['password'])!= "" )
{
$password=$_POST['password'];
$_SESSION['password']= $password;

}
else{

	$_SESSION['error']= "";

}

if ($password != $repeatpassword) {

	echo $_SESSION['message']='incorrect';

}

if (isset($_SESSION['error'])) 

{
	//redirect user back to registration page
header("location: ../profile.php");
}

else {
//save user details to database
	
	mysqli_query($connection, "update personnel set password='$password' where username='$username'") or die(mysqli_error($connection));

$_SESSION['successpwd']=='password';
header("location: ../profile.php");


   exit("Account Details Update Successful");

}



?>
