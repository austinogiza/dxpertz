<?php
session_start();
require_once("../config/config.php");
//database connection
$username=$_POST['username'];
$password=$_POST['password'];

$query=mysqli_query($connection,
"select username, admin, email, role from staff where username='$username' and password='$password'")
or die(mysqli_error($connection));
if (mysqli_num_rows($query)>0) 
{
while ($row=mysqli_fetch_assoc($query)) 
{
$username=$row['username'];
$admin=$row['admin'];
$email=$row['email'];
$role=$row['role'];
}

$_SESSION['username']=$username;
$_SESSION['is_staff_admin']=$admin;
$_SESSION['staff_role_id']=$role;

header("location:../admin.php");
}

else {
	$_SESSION['message']="invalid";
	header("location:../adminlogin.php");

}
?>