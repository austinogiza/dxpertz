 <?php
session_start();
require_once("../config/config.php");
//database connection
$username=$_POST['username'];
$password=$_POST['password'];

$query=mysqli_query($connection,
"select username, email from personnel where username='$username' and password='$password'")
or die(mysqli_error($connection));

if (mysqli_num_rows($query)>0) 
{
while ($row=mysqli_fetch_assoc($query)) 
{
$username=$row['username'];
$email=$row['email'];
}
$_SESSION['username']=$username;
$_SESSION['password']=$password;

header("location:../dashboard.php");
}

else {
	$_SESSION['message']="invalid";
	header("location:../login.php");

}
?>