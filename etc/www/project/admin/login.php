<?php
session_start();
require_once('../library/sql.php');
$db=new DB();
$username = mysql_real_escape_string($_POST['username']);
$password = mysql_real_escape_string($_POST['pwd']);
$sql = "SELECT username FROM admin WHERE username='$username' AND password='$password'";
$result = mysql_query($sql) or die(mysql_error());
if (mysql_num_rows($result) > 0)
{  
  $_SESSION['login'] = true;
  $_SESSION['username'] = $username;
  header('location:main.php');
  exit();
} 
else
{
  header("location:index.php?msg=Incorrect username/password");
  exit();
}
?>