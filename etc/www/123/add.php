<?php
session_start();
extract($_POST);
$query="INSERT INTO customer(password, sfname, slname, saddress, scity, Email, phone, pfname, plname, paddress, pcity, pphone) 
		VALUES ('$password', '$fname', '$lname', '$address', '$city', '$email', '$phone', '$PaymentFirstName', 
		'$PaymentLastName', '$PaymentAddress', '$PaymentCity', '$PaymentPhone')";
require_once ('library/sql.php');
$db=new DB();
$cartitem=("select * from cart where ctid='$sid'");
$item=$db->query($cartitem);
$citem=mysql_num_rows($item);
$search="Select id, email from customer where email='$email'";
$svalue=$db->query($search);
if(mysql_num_rows($svalue)==0)
{
	if($password==$repassword)
	{
		$result=$db->query($query);
		$_SESSION['id'] = $id;
		$_SESSION['user']=$_POST['email'];
		$_SESSION['signin']=true;
		if(!($citem>0))
		{
			header('Location:account.php');
			exit();
		}
		header("Location:step2.php");
		
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
