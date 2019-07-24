<?php
session_start();

require_once("../config/config.php");
//begin validation
//

if (isset($_POST['name']) && trim($_POST['name'])!= "" )
{
$name=$_POST['name'];
$_SESSION['name']= $name;

}
else{

	$_SESSION['error']= "";

}

if (isset($_POST['email']) && trim($_POST['email'])!= "" )
{
$email=$_POST['email'];
$_SESSION['email']= $email;

}
else{

	$_SESSION['error']= "";

}

if (isset($_POST['message']) && trim($_POST['message'])!= "" )
{
$message=$_POST['message'];
$_SESSION['message']= $message;
}
else{

	$_SESSION['error']= "";

}
if (isset($_POST['phone']) && trim($_POST['phone'])!= "" )
{
$phone=$_POST['phone'];
$_SESSION['phone']= $phone;

}
else{

	$_SESSION['error']= "";

}
if (isset($_SESSION['error'])) 

{
	//redirect user back to registration page
header("location: ../contact.php");
}

else {
//save user details to database

mysqli_query($connection, 

"insert into contact set name='$name', email='$email', phone='$phone', 	
message='$message'") or die(mysqli_error($connection));

$_SESSION['success']='mailsent';
   header("location: ../contact.php");
}

?>
