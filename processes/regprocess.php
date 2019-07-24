<?php
session_start();

require_once("../config/config.php");
//begin validation
//

if (isset($_POST['fullname']) && trim($_POST['fullname'])!= "" )
{
$fullname=$_POST['fullname'];
$_SESSION['fullname']= $fullname;

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

if (isset($_POST['programme_id']) && trim($_POST['programme_id'])!= "" )
{
$programme_id=$_POST['programme_id'];
$_SESSION['programme_id']= $programme_id;

}
else{

	$_SESSION['error']= "";

}
if (isset($_SESSION['error'])) 

{
	//redirect user back to registration page
header("location: ../register.php");
}

else {
//save user details to database

mysqli_query($connection, 

"insert into register set fullname='$fullname', email='$email', phone='$phone', message='$message', programme_id='$programme_id'") or die(mysqli_error($connection));

$_SESSION['success']='mailsent';
   header("location: ../register.php");
}

?>
