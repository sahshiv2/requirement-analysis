<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("location:index.php?msg=Session Expired");
}
require_once ('../library/sql.php');
$db=new DB();
if(isset($_GET["deleteproduct"]))
{
	$id = $_GET["deleteproduct"];
	$query=$db->query("select image from products where products.pid=".$id);
	$data=mysql_fetch_assoc($query);
	$image=$data['image'];
	$db->removeimage($image);
	$result = mysql_query("DELETE FROM products WHERE products.pid =".$id);
	if($result)
	{
		$msg = "Deleted successfully";
	}
	else
	{
		$msg = "Error on deleting";
		header("Location: product_list.php?msg=$msg");
		exit;
	}
}
$records_per_page = 15; 
$total = mysql_result(mysql_query("SELECT COUNT(*) FROM products"), 0); 
$page_count = ceil($total / $records_per_page); 
$page = 1; 
if (isset($_GET['page']) && $_GET['page'] >= 1 && $_GET['page'] <= $page_count)
 { 
    $page = (int)$_GET['page']; 
} 
$skip = ($page - 1) * $records_per_page; 
$query =("SELECT products.pid, products.pname, products.detail, category.cname, brand.name, products.price, products.status, products.feature
					FROM (products INNER JOIN category ON products.category = category.cid) 
					INNER JOIN brand ON products.brand = brand.id
					order by pid desc LIMIT $skip, $records_per_page ");
$result=$db->query($query);
?>
<html>
	<head>
		<title>Products</title>
		<link rel="stylesheet" type="text/css" href="../CSS/style.css" media="screen" />
	</head>
	<body>
		<div class="wrapper">
			<?php
				require_once '../library/header.php';
				require_once '../library/content.php';
			?>
			<div class="rightcontent">
				<center><h3>List of Product</h3></center>
				<br/><a href="add_product.php" class="link_td">Add</a><br/>
				<?php
				if(mysql_num_rows($result)>=1)
				{
					?>
						<br/><table align="center" border="0px" cellpadding="2" cellspacing="1">
						 <tr bgcolor="#FFCCCC"><th>Name</th><th>Details</th>
						 <th>Category</th><th>Brand</th>
						 <th>Price</th><th>Featured</th>
						 <th>Status</th><th>Update</th></tr>
						 
						
					<?php
					while($row=mysql_fetch_assoc($result))
					{
					?>
						
						<tr bgcolor="#CCFFFF"><td><?php echo $row['pname'];?></td>
						<td><?php echo $row['detail'];?></td>
						<td><?php echo $row['cname'];?></td>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['price'];?></td>
						<td><?php echo $row['feature'];?></td>
						<td><?php echo $row['status'];?></td>
						<td><a href="product_list.php?deleteproduct=<?php echo $row['pid'];?>" style="text-decoration:none">delete/</a>
						<a href="prdupdate.php?edit=<?php echo $row['pid'];?>" style="text-decoration:none;">edit</a></td></tr>
					<?php
						
					}
				
				?>
				</table><br/>
				Result Page:
				<?php
				for ($i = 1; $i <= $page_count; ++$i)
					{
						echo '<a href="' . $_SERVER['PHP_SELF'] . '?page=' . $i . '" align="center" style="text-decoration:none;">'. $i . '</a> ';
					}
				}
				?>
			</div>
		<div class="footer">
			<p>&copy; info@employee. All rights reserved.</p>
		</div>
		</div>
	</body>
</html>