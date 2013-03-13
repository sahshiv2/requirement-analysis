<?php
session_start();
require_once ('library/sql.php');
$db=new DB();
if(isset($_GET['detail']))
{
	$id = $_GET['detail'];
	$query = $db->query("SELECT products.pid, products.pname, products.image, products.detail, products.brand, category.cname, brand.name, products.price
					FROM (products INNER JOIN category ON products.category = category.cid) 
					INNER JOIN brand ON products.brand = brand.id WHERE products.pid =".$id);
}
$row=mysql_fetch_assoc($query)
?>
<html>
	<head>
		<title>MYSTORE</title>
		<link rel="stylesheet" type="text/css" href="CSS/style1.css" media="screen"/>
		<script type="text/javascript" src="JS/script.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<?php
				require_once 'library/headers.php';
				require_once 'library/contents.php';
			?>
			<div class="rightcontent">
			<center>
				<table cellpadding="40px">
					<tr><td height="40" width="40">
					<img src="upload/<?php echo $row['image'];?>" width="300" height="300" style="border:1px solid"></img></td>
					<td>
					<table>
						<tr><td>Name:</td>
						<td><?php echo $row['pname']; ?></td></tr>
						<tr><td>Detail:</td>
						<td><?php echo $row['detail']; ?></td></tr>
						<tr><td>Category:</td>
						<td><?php echo $row['cname']; ?></td></tr>
						<tr><td>Brand:</td>
						<td><?php echo $row['name']; ?></td></tr>
						<tr>
							<td>Price:</td>
							<td>Rs.<?php echo $row['price']; ?></td>
						</tr>
						<tr><td><a href="addcart.php?pid=<?php echo $row['pid'];?>" style="background:url(Images/menubutton.jpg); text-decoration:none;">Add to Cart</a></td></tr>
					</table>
				</table>
			<center>	
				<?php
					$brand = $row['brand'];
					define('COLS', 5);
					$col = 0;
					$other = $db->query("select products.pid, products.pname, products.image, products.price FROM products where brand='$brand' && pid<>'$id'");
					if(mysql_num_rows($other)> 0)
					{
					?>
						<fieldset style="width:850px; color:blue;">
						<legend><h3>Products with this Brand</h3></legend>
						<table cellpadding="15px">
						<tr>
				<?php
					while($products=mysql_fetch_assoc($other))
					{
						$col++;
						if ($col > COLS)
						{ 
							$col = 0; 
						}	
						else
						{
						?>
							<td><a href="viewdetail.php?detail=<?php echo $products['pid'];?>">
							<img src="upload/<?php echo $products['image'];?>" height="140" width="145"/></a><br/>
							<center><?php echo $products['pname'];?></center>
						<?php
						}
					}
				}
				?>
			</table>
			</fieldset>
			</div>
			<div class="footer">
				<p>&copy; info@mystore.com<br/> All rights reserved.</p>
			</div>
			</div>
	</body>
</html>