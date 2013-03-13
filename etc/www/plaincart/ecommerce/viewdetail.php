<?php
require_once ('library/sql.php');
$db=new DB();
if(isset($_GET['detail']))
{
	$id = $_GET['detail'];
	$query = $db->query("SELECT * FROM products WHERE products.pid =".$id);
}
?>
<html>
	<head>
		<title>MYSTORE</title>
		<link rel="stylesheet" type="text/css" href="CSS/styles.css" media="screen" />
	</head>
	<body>
		<div class="wrapper">
			<?php
				require_once 'library/headers.php';
				require_once 'library/contents.php';
			?>
			<div class="rightcontent">
			<br/><br/><br/>
				<?php
					while($row=mysql_fetch_assoc($query))
					{
				?>
					<table cellpadding="10px">
					<tr><td height="40" width="40">
					<img src="upload/<?php echo $row['image'];?>" width="300" height="300" style="border:1px solid"></img></td>
					
					<td><table>
					<tr><td>Name:</td>
					<td><?php echo $row['name']; ?></td></tr>
					<tr><td>Detail:</td>
					<td><?php echo $row['detail']; ?></td></tr>
					<tr><td>Category:</td>
					<td><?php echo $row['category']; ?></td></tr>
					<tr><td>Brand:</td>
					<td><?php echo $row['brand']; ?></td></tr>
					<tr><td>Price:</td>
					<td><?php echo $row['price']; ?></td></tr>
					<tr><td><a href="addcart.php?pid=<?php echo $row['pid'];?>" style="background:url(Images/menubutton.jpg); text-decoration:none;">Add to Cart</a></td></tr>
					</table>
					</table>
				<?php
					}
				?>
				
			</div>
			<div class="footer">
				<p>&copy; info@mystore.com<br/> All rights reserved.</p>
			</div>
			</div>
	</body>
</html>