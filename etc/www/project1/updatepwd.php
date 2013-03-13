<?php
session_start();
if(!isset($_SESSION['signin']))
{
	header('Location:signin.php');
	exit();
}
$user=$_SESSION['user'];
require_once('library/sql.php');
$db=new DB();
$result=$db->query("select password FROM customer WHERE email='$username'");
$old_password=$_POST['password'];
$new_password=$_POST['newpassword'];
$confirm_password=$_POST['confirmpassword'];
if($new_password==$confirm_password)
{
	$query=$db->query("UPDATE customer SET password='$new_password' WHERE email='$user'");
	header("Location:account.php?msg=password updated");
}
else 
{
	header("Location:pwdchange.php?msg=password mismatch");
}
?>