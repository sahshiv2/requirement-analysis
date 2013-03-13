<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("location:index.php?msg=Session Expired");
	exit();
}
require_once ('../library/sql.php');
$name=$_POST['name'];
$detail=$_POST['detail'];
$status=$_POST['status'];
$db=new DB();
$search="Select name from brand where name='$name'";
$value=$db->query($search);
if(mysql_num_rows($value)>0)
{
	header("Location:add_brand.php?msg=brand name already exists");
	exit();
}
else
{
	$query="INSERT INTO brand (name, details, status) VALUES ('$name', '$detail', '$status')";
	$result=$db->query($query);
	if($result)
	header("location:add_brand.php?msg=brand added successfully");
	exit();
}
?>