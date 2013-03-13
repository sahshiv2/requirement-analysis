<?php
session_start();
if(isset($_SESSION['signin']))
{
	header('Location:index.php?already signed in');
	exit();
}
require_once('library/sql.php');
$db=new DB();
$email = mysql_real_escape_string($_POST['phone']);
$password = mysql_real_escape_string($_POST['password']);
$sql = "SELECT phone FROM customer WHERE email='$phone' AND password='$password'";
$result = mysql_query($sql) or die(mysql_error());
if (mysql_num_rows($result)>0 )
{  
  $_SESSION['signin'] = true;
  $_SESSION['user'] = $phone;
  header("location:index.php?Welcome");
  exit();
} 
else
{
  header("location:index.php?msg=Incorrect username/password");
  exit();
}
?>