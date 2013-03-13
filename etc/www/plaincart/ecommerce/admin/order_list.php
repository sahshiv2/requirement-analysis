<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("location:index.php");
}
require_once "../library/sql.php";
$db= new DB();
//update order status
if($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['action'] == 'update')
{
	$status = $_POST['status'];
	$error = 0;
	$sts=$db->query("select * FROM orders");
	while($val=mysql_fetch_assoc($sts))
	{
		$status = $_POST['status_'.$val['oid']];
		if($status)
		{
			$set = "UPDATE orders SET status='$status' WHERE oid=".$val['oid'];
			$update = $db->query($set) or die(mysql_error());
			if(!$update)
			{
				$error++;
			}
		}
	}
	$msg = "";
	if($error > 0)
	{
		$msg = "There was some errors while udpating order.";
	}
	header("Location: order_list.php?msg=$msg");
	die;
}
$records_per_page = 15; 
$total = mysql_result(mysql_query("SELECT COUNT(*) FROM orders"), 0); 
$page_count = ceil($total / $records_per_page); 
$page = 1; 
if (isset($_GET['page']) && $_GET['page'] >= 1 && $_GET['page'] <= $page_count)
{ 
    $page = (int)$_GET['page']; 
} 
$skip = ($page - 1) * $records_per_page; 
$query =("SELECT orders.oid, products.name, products.price, orders.quantity, orders.status FROM orders 
		INNER JOIN products ON orders.pid = products.pid order by oid desc LIMIT $skip, $records_per_page");
$result=$db->query($query);
?>
<html>
	<head>
	<title>Orders</title>
		<link rel="stylesheet" type="text/css" href="../CSS/style.css" media="screen" />
	</head>
	<body>
		<div class="wrapper">
		<?php
			require_once "../library/header.php";
			require_once "../library/content.php";
		?>
		<div class="rightcontent">
		
		<?php
			if(mysql_num_rows($result)>=1)
				{
					?>
						<form name="status" method="POST" action="order_list.php?action=update">	
						<center><h3> Ordered  Item</h3></center>
						<br/><table align="center" border="0px" cellpadding="2" cellspacing="1">
						 <tr bgcolor="white"><th>Product Name</th><th>Unit price</th><th>Quantity</th>
						 <th>Status</th>
					<?php
					while($row=mysql_fetch_assoc($result))
					{
					?>
						<tr bgcolor="white">
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['price'];?></td>
						<td><?php echo $row['quantity'];?></td>
						<td><?php echo $row['status'];?>
						<select name="status_<?php echo $row['oid']; ?>">
						<option value=""></option>
						<option value="pending">Pending</option>
						<option value="shipping">Shipping</option>
						<option value="delivered">Delivered</option>
						</select></td>
						
						</tr>
					<?php	
					}
				?>
				<tr>
				<td colspan="6"><input type="submit" name="btnupdate" value="order update" /></td>
				</tr>
				</table>
				</form><br/>
				Result Page:
				<?php
				for ($i = 1; $i <= $page_count; ++$i)
					{
						echo '<a href="' . $_SERVER['PHP_SELF'] . '?page=' . $i . '" align="center" style="text-decoration:none;">'. $i . '</a> ';
					}
				}
				else
				{
					echo "No orders are placed yet";
				}
				?>
		
		</div>
		<div class="footer">
			<p></p>
		</div>
		</div>
	</body>
</html>