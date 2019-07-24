<?php
session_start();
// logout session

session_start();
if(session_destroy()){

$_SESSION['message']='logout';
header("location:../adminlogin.php");

}
?>
