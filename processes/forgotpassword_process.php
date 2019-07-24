<?php
session_start();

require_once("../config/config.php");

//begin validation

$email = $_POST['email'];

if (isset($_POST['submit']) && trim($_POST['submit'])!= "" ){
$selector = bin2hex(random_bytes(8));
$token = random_bytes(32);

$url = "www.dxpertz.com/creatnewpassword.php?selector=".$selector. "&validator". bin2hex($token);

$expires = date("U") + 1800;

$userEmail = $_POST['email'];
$sql = "delete from passwordreset where passwordresetemail=?";

$stmt = mysqli_stmt_init($connection);

if (!mysqli_stmt_prepare($stmt, $sql)) {
	echo "There Was An Error";
	exit();
}

else{
	mysqli_stmt_bind_param();
}
}

else{
	header("Location: ../forgotpassword.php");

}

?>
