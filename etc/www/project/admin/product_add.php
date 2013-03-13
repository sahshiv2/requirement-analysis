<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("location:index.php?msg=Session Expired");
	exit;
}
require_once ('../library/sql.php');
$name=$_POST['name'];
$detail=$_POST['detail'];
$category=$_POST['category'];
$brand=$_POST['brand'];
$status=$_POST['status'];
$price=$_POST['price'];
$feature=$_POST['feature'];
$file=$_FILES['photo']['name'];
$ext=explode(".",$file);
$extension=end($ext);
$filename=time().".".$extension;
$query="INSERT INTO products (pname, detail, category, brand, price, status, feature, image) 
		VALUES ('$name', '$detail', '$category', '$brand', '$price', '$status', '$feature', '$filename')";
$db=new DB();
$result=$db->query($query);
$target = "../upload/".$filename;
if(move_uploaded_file($_FILES['photo']['tmp_name'], $target))
	header("location:add_product.php?msg=product registered");
else
	header("location:add_product.php?msg=Error Uploading. product registered");
?>