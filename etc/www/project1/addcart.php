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
	$query="SELECT * FROM products WHERE pid=".$id;
	$result=$db->query($query);
	while($row=mysql_fetch_assoc($result))
	{
		$price=$row['price'];
		$name=$row['name'];
		$image=$row['image'];
		$brand=$row['brand'];
		$sql=mysql_query("INSERT INTO cart (pid, productname, image, brand, quantity, unitprice, ctid) 
						VALUES ('$id', '$name', '$image', '$brand', '1', '$price', '$ctid')") or die(mysql_error());
	}
	header("Location:index.php?item added to cart");
	exit();
}
?>