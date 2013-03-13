<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("location:index.php?msg=Session Expired");
	exit();
}
$id=$_GET['orderid'];
require_once '../library/sql.php';
$db=new DB();
$order=$db->query("SELECT * FROM orders WHERE oid='$id'") or die(mysql_error());
$numitem  = mysql_num_rows($order);
$subtotal = 0;
$detail=$db->query("SELECT * FROM orderdetail WHERE odid='$id'");
$orderdetail = mysql_fetch_assoc($detail);
?>
<html>
	<head>
		<title>Category</title>
		<link rel="stylesheet" type="text/css" href="../CSS/style.css" media="screen" />
	</head>
	<body>
		<div class="wrapper">
			<?php
				require_once '../library/header.php';
				require_once '../library/content.php';
			?>
			<div class="rightcontent">
				<center>Order Detail</center>
				
				<table align="center" cellpadding="2" cellspacing="1" border="0px">
					<tr bgcolor="#FFCCCC"> <td  colspan="4" align="center">Ordered Item</td></tr>
					<tr bgcolor="#CCFFFF"> <td>Product</td><td>Quantity</td><td>Unit Price(Rs.)</td><td>Total(Rs.)</td></tr>
					<?php
					for ($i = 0; $i < $numitem; $i++)
					{
						$row=mysql_fetch_assoc($order);
						$subtotal+=$row['quantity']*$row['price'];
					?>
							<tr bgcolor="#99FFCC"> 
								<td><?php echo $row['productname']; ?></td>
								<td><?php echo $row['quantity']; ?></td>
								<td><?php echo$row['price']; ?></td>
								<td><?php echo $row['quantity']*$row['price']; ?></td>
							</tr>
					<?php
					}
					?>
					<tr bgcolor="#99CCFF"> 
						<td align="right"  colspan="3">Sub-total</td>
						<td><?php echo "Rs. ".$subtotal; ?></td>
					</tr>
					<tr bgcolor="#99CCFF"> 
						<td align="right" colspan="3">Tax</td>
						<td><?php echo "13%"; ?></td>
					</tr>
					<tr bgcolor="#99CCFF"> 
						<td align="right" colspan="3">Total</td>
						<td><?php echo "Rs. ".(0.13*$subtotal+$subtotal); ?></td>
					</tr>
				</table>
				<p>&nbsp;</p>
				<center>Shipping Information</center>
				<table width="550" border="0" align="center" cellpadding="2">
					<tr> 
						<td width="150">First Name</td>
						<td><?php echo $orderdetail['sfname']; ?>
					</tr>
					<tr> 
						<td width="150">Last Name</td>
						<td><?php echo $orderdetail['slname']; ?>
					</tr>
					<tr> 
						<td width="150">Address</td>
						<td><?php echo $orderdetail['saddress']; ?>
					</tr>
					<tr> 
						<td width="150">Phone Number</td>
						<td><?php echo $orderdetail['sphone'];?>
					</tr>
					<tr> 
						<td width="150">City</td>
						<td><?php echo $orderdetail['scity'];?>
					</tr>
				</table>
				<p>&nbsp;</p>
				<center>Payment Information</center>
				 <table width="550" border="0" align="center" cellpadding="2">
				<tr> 
					<td width="150">First Name</td>
					<td><?php echo $orderdetail['pfname'];?>
				</tr>
				<tr> 
					<td width="150">Last Name</td>
					<td><?php echo $orderdetail['plname'];?>
				</tr>
				<tr> 
					<td width="150">Address</td>
					<td><?php echo $orderdetail['paddress'];?>
				<tr> 
					<td width="150">Phone Number</td>
					<td><?php echo $orderdetail['pphone'];?>
				</tr>
				<tr> 
					<td width="150">City</td>
					<td><?php echo $orderdetail['pcity'];?>
				</tr>
			</table>
			</div>
		<div class="footer">
			<p>&copy; info@employee. All rights reserved.</p>
		</div>
		</div>
	</body>
</html>