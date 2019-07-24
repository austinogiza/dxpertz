<?php
session_start();

require_once("../config/config.php");

$repassword= $_POST['repassword'];

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
$_SESSION['password)']= $password;
}
else{

	$_SESSION['error']= "";

}
if (isset($_POST['dateofbirth']) && trim($_POST['dateofbirth'])!= "" )
{
$dateofbirth=$_POST['dateofbirth'];
$_SESSION['dateofbirth)']= $dateofbirth;
$dateofbirth= date('YYYY-MM-DD');
}
else{

	$_SESSION['error']= "";

}

if ($password != $repassword)
{

	echo "Password Do Not Match";

}

if (isset($_SESSION['error'])) 

{
	//redirect user back to registration page
header("location: ../signup.php");
}

else {
//save user details to database
	


	mysqli_query($connection, 

		"insert into personnel set firstname='$firstname', lastname='$lastname', dateofbirth='$dateofbirth'
		phone= '$phone', email='$email', password='$password', username= '$username', state_id='$state_id'"
	) or die(mysqli_error($connection));
	

	$_SESSION['success']='mailsent';
   header("location: ../signup.php");

   exit("User Account Creation Successful");

}



?>
