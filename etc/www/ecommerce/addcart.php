<?php
session_id();
session_start();
if(!isset($_SESSION['signin']))
{
	$cid=0;
}
if(isset($_GET['pid']))
{
	$ctid=session_id();
	$id=$_GET['pid'];
	require_once("library/sql.php");
	$db=new DB();
	$cartcontent=$db->query("SELECT * FROM products WHERE pid = '$id'");
	$content=mysql_fetch_assoc($cartcontent);
	$productname=$content['name'];
	$image=$content['image'];
	$price=$content['price'];
	$check=$db->query("SELECT pid FROM CART WHERE pid='$id' and ctid = '$ctid'");
	if(mysql_num_rows($check)>0)
	{
	header("Location:index.php?msg=product already added to the cart");
	exit();
	}
	else
	{
		$sql=$db->query("INSERT INTO cart (pid, productname,image, price, ctid) VALUES ('$id', '$productname','$image', '$price', '$ctid')") or die(mysql_error());
		header("Location:cart.php?item added to cart");
		exit();
	}
}
?>