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
$result = mysql_query("SELECT * FROM products order by pid desc LIMIT $skip, $records_per_page ");
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
			
				<?php
				if(mysql_num_rows($result)>0)
				{
					?>
						<br/><table align="center" border="1" cellpadding="3px">
						 <tr><th>Name</th><th>Details</th>
						 <th>Category</th><th>Brand</th>
						 <th>Price</th><th>Featured</th>
						 <th>Status</th>
						 
						
					<?php
					while($row=mysql_fetch_assoc($result))
					{
					?>
						
						<tr><td><?php echo $row['name'];?></td>
						<td><?php echo $row['detail'];?></td>
						<td><?php echo $row['category'];?></td>
						<td><?php echo $row['brand'];?></td>
						<td><?php echo $row['price'];?></td>
						<td><?php echo $row['feature'];?></td>
						<td><?php echo $row['status'];?></td>
						<td><a href="product_list.php?deleteproduct=<?php echo $row['pid'];?>" style="text-decoration:none">delete</a>
						<td><a href="prdupdate.php?edit=<?php echo $row['pid'];?>" style="text-decoration:none;">edit</a></td></tr>
					<?php
						
					}
				}
				
				?>
				</table>
					<center><br/><a href="add_product.php" class="link_td">Add a new product</a><br/></center>
				<?php
				for ($i = 1; $i <= $page_count; ++$i)
					{
						echo '<a href="' . $_SERVER['PHP_SELF'] . '?page=' . $i . '">'. $i . '</a> ';
					}
				?>
			</div>
		<div class="footer">
			<p>.</p>
		</div>
		</div>
	</body>
</html>