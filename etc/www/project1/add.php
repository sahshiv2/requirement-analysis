<?php
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$password=$_POST['password'];
$repassword=$_POST['repassword'];
$country=$_POST['country'];
$city=$_POST['city'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$query="INSERT INTO customer(password, FirstName, LastName, Country, City, Email, Phone) VALUES 
		('$password', '$fname', '$lname', '$country', '$city', '$email', '$phone')";
require_once ('library/sql.php');
$db=new DB();
$search="Select email from customer where email='$email'";
$svalue=$db->query($search);
if(mysql_num_rows($value)>0)
{
	if($password==$repassword)
	{
		$result=$db->query($query);
		header("Location:register.php?msg=you are registered into customer list successfully");
		exit();
	}
	else
	{
		header("Location:register.php?msg=Password Mismatch.");
		exit();
	}
}
else
{
	header("Location:register.php?msg=User already exists");
	exit();
}
?>
