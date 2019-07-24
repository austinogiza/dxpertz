<?php
session_start();
require_once("../config/config.php");

$_SESSION['username']= $username;


if (isset($_POST['image']) && trim($_POST['image'])!= "" )
{
$image=$_FILES['image'];
$fileImage =  $file['image'];

$imageTmpImage =  $file['tmp_image'];

$imageError=  $file['error'];


$imageSize =  $file['size'];

$imageType =  $file['type'];

$imageExt = explode('.', $fileImage);
$fileActualExt = strtolower(end($imageExt));

$allowed = array('jpg', 'jpeg', 'png', 'gif');

if(in_array($fileActualExt, $allowed)){
	if ($imageError ===0) {

	if ($imageSize < 100000) {
			
			$fileNameNew = 'profile'.$username.'.'.$fileActualExt;
			$fileDestination = 'uploads/'.$fileNameNew;
			move_uploaded_file($imageTmpImage, $fileDestination);
			
	mysqli_query($connection, "insert into profile set image='$image'") or die(mysqli_error($connection));
	}	
	}
}

else
{

}
}
//save user details to database
		

?>