<?php
session_start();

require_once("../config/config.php");


//begin validation

if (isset($_POST['year']) && isset($_POST['year'][0]) ) 
{
$year=$_POST['year'];
}

else{

	$_SESSION['error']= "";

}

if (isset($_SESSION['error'])) 

{
	//redirect user back to registration page

header("location:../add2cities.php");
}

else {
//save user details to database

for($a=0;$a<count($year);$a++)
{
	mysqli_query($connection, 

		"insert into year set year='$year[$a]'")
		 or die(mysqli_error($connection));
	$_SESSION['message']='itemcreationsuccess';
	header("location:../add2cities.php");

}

	

}


?>

