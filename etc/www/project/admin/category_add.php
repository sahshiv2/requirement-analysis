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
$search="Select cname from category where cname='$name'";
$value=$db->query($search);
if(mysql_num_rows($value)>0)
{
	header("Location:add_category.php?msg=category cname already exists");
	exit();
}
else
{
	$query="INSERT INTO category (cname, details, status) VALUES ('$name', '$detail', '$status')";
	$result=$db->query($query);
	if($result)
	header("location:add_category.php?msg=category added successfully");
	exit();
}
?>