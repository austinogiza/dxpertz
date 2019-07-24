<?php
session_start();
require_once("../config/config.php");


//begin validation

if (isset($_POST['firstname']) && trim($_POST['firstname'])!= "" )
{
$firstname=$_POST['firstname'];
$_SESSION['firstname']= $firstname;

}
else{

	$_SESSION['error']= "";

}

if (isset($_POST['lastname']) && trim($_POST['lastname'])!= "" )
{
$lastname=$_POST['lastname'];
$_SESSION['lastname']= $lastname;

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
if (isset($_POST['phone']) && trim($_POST['phone'])!= "" )
{
$phone=$_POST['phone'];
$_SESSION['phone']= $phone;
}
else{

	$_SESSION['error']= "";

}
if (isset($_POST['state_id']) && trim($_POST['state_id'])!= "" )
{
$state_id=$_POST['state_id'];
$_SESSION['state_id']= $state_id;

}
else{

	$_SESSION['error']= "";

}

if (isset($_POST['username']) && trim($_POST['username'])!= "" )
{
$username=$_POST['username'];
$_SESSION['username']= $username;
}
else{

	$_SESSION['error']= "";

}
if (isset($_POST['password']) && trim($_POST['password'])!= "" )
{
$password=$_POST['password'];
$_SESSION['password']= $password;
}
else{

	$_SESSION['error']= "";

}
if (isset($_POST['date_id']) && trim($_POST['date_id'])!= "" )
{
$date_id=$_POST['date_id'];
$_SESSION['date_id']= $date_id;

}
else{

	$_SESSION['error']= "";

}

if (isset($_POST['month_id']) && trim($_POST['month_id'])!= "" )
{
$month_id=$_POST['month_id'];
$_SESSION['month_id']= $month_id;

}
else{

	$_SESSION['error']= "";

}

if (isset($_POST['year_id']) && trim($_POST['year_id'])!= "" )
{
$year_id=$_POST['year_id'];
$_SESSION['year_id']= $year_id;

}
else{

	$_SESSION['error']= "";

}

if (isset($_SESSION['error'])) 

{
	//redirect user back to registration page
header("location: ../addstudent.php");
}

else {
//save user details to database
	


	mysqli_query($connection, 
"insert into personnel set firstname='$firstname', 
		lastname='$lastname', date_id='$date_id', month_id='$month_id', year_id='$year_id',
		phone= '$phone', email='$email', password='$password', 
		username='$username', state_id='$state_id'"
	) or die(mysqli_error($connection));

$_SESSION['success']='mailsent';
   header("location: ../addstudent.php");
	

}



?>
