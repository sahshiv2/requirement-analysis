<?php
session_start();
if(isset($_SESSION['signin']))
{
	header('location:info.php');
	exit();
}
require_once('library/sql.php');
$db=new DB();
$email = mysql_real_escape_string($_POST['email']);
$password = mysql_real_escape_string($_POST['password']);
$sql = "SELECT id, email FROM customer WHERE email='$email' AND password='$password'";
$result = mysql_query($sql) or die(mysql_error());
$value=mysql_fetch_assoc($result);
$id=$value['id'];
$cartitem=("select * from cart where ctid='$sid'");
$item=$db->query($cartitem);
$citem=mysql_num_rows($item);
if (mysql_num_rows($result)>0 )
{  
	$_SESSION['signin'] = true;
	$_SESSION['user'] = $email;
	$_SESSION['id'] = $id;
	if(!($citem>0))
	{
		header('Location:myaccount.php');
		exit();
	}
	else
	{
		header('location:info.php');
		exit();
	}
} 
else
{
  header("location:checkingout.php?msg=Incorrect username/password");
  exit();
}
?>