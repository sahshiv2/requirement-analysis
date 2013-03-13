<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("location:index.php?msg=Session Expired. Please Login.");
	exit;
}
$username=$_SESSION['username'];
require_once ('../library/sql.php');
$db=new DB();
$result=$db->query("select * FROM admin WHERE username='$username'");
$old_password=$_POST['password'];
$new_password=$_POST['newpassword'];
$confirm_password=$_POST['confirmpassword'];
if($new_password==$confirm_password)
{
	$query=$db->query("UPDATE admin SET password='$new_password' WHERE username='$username'");
	header("Location:main.php?msg=password updated");
}
else 
{
	header("Location:edit_password.php?msg=password mismatch");
}

?>