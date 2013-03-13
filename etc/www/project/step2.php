<?php
session_start();
$sid=session_id();
$id=$_SESSION['id'];
require_once 'library/sql.php';
$db=new DB();
$user=$db->query("SELECT * FROM customer WHERE id='$id'");
$customer=mysql_fetch_assoc($user);
$cart=$db->query("SELECT * FROM cart WHERE ctid='$sid'");
$numitem  = mysql_num_rows($cart);
$subtotal = 0;
?>
<html>
	<head>
		<title>MYSTORE</title>
		<link rel="stylesheet" type="text/css" href="CSS/style1.css" media="screen" />
		<script type="text/javascript" src="JS/script.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<?php
				require_once 'library/headers.php';
				require_once 'library/contents.php';
			?>
			<div class="rightcontent">
			<center>Step 1 : Confirm Order </center>
			<form action="placeorder.php" method="post" name="frmCheckout" id="frmCheckout">
			<table align="center" cellpadding="2" cellspacing="1" border="0px">
				<tr bgcolor="#FFCCCC"> <td  colspan="4" align="center">Ordered Item</td></tr>
				<tr bgcolor="#CCFFFF"> <td>Item</td><td>Quantity</td><td>Unit Price(Rs.)</td><td>Total(Rs.)</td></tr>
				<?php

				for ($i = 0; $i < $numitem; $i++)
				{
						$row=mysql_fetch_assoc($cart);
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
				<center><fieldset style="width:300px">
				<legend>Shipping Information</legend>
				<table width="550" border="0" align="center" cellpadding="2">
					<tr> 
						<td width="150">First Name</td>
						<td>
							<input name="hidShippingFirstName" type="text" id="hidShippingFirstName" value="<?php echo $customer['sfname']; ?>" size="30"></td>
					</tr>
					<tr> 
						<td width="150">Last Name</td>
						<td>
							<input name="hidShippingLastName" type="text" id="hidShippingLastName" value="<?php echo $customer['slname']; ?>" size="30"></td>
					</tr>
					<tr> 
						<td width="150">Address</td>
						<td>
							<input name="hidShippingAddress" type="text" id="hidShippingAddress" value="<?php echo $customer['saddress'];?>" size="30"></td>
					</tr>
					<tr> 
						<td width="150">Phone</td>
						<td>
							<input name="hidShippingPhone" type="text" id="hidShippingPhone" value="<?php echo $customer['sphone'];?>" size="30"></td>
					</tr>
					<tr> 
						<td width="150">City</td>
						<td>
							<input name="hidShippingCity" type="text" id="hidShippingCity" value="<?php echo $customer['scity'];?>" size="30"></td>
					</tr>
				</table>
				</fieldset>
				<p>&nbsp;</p>
				<fieldset style="width:300px">
				<legend>Payment Information</legend>
				<table width="550" border="0" align="center" cellpadding="2">
					<tr> 
						<td width="150">First Name</td>
						<td>
							<input name="hidPaymentFirstName" type="text" id="hidPaymentFirstName" value="<?php echo $customer['pfname']; ?>" size="30"></td>
					</tr>
					<tr> 
						<td width="150">Last Name</td>
						<td>
							<input name="hidPaymentLastName" type="text" id="hidPaymentLastName" value="<?php echo $customer['plname']; ?>" size="30"></td>
					</tr>
					<tr> 
						<td width="150">Address</td>
						<td>
							<input name="hidPaymentAddress" type="text" id="hidPaymentAddress" value="<?php echo $customer['paddress'];?>" size="30"></td>
					</tr>
					<tr> 
						<td width="150">City</td>
						<td>
							<input name="hidPaymentCity" type="text" id="hidPaymentCity" value="<?php echo $customer['pcity'];?>" size="30"></td>
					</tr>
					<tr> 
						<td width="150">phone</td>
						<td>
							<input name="hidPaymentPhone" type="text" id="hidPaymentPhone" value="<?php echo $customer['pphone'];?>" size="30"></td>
					</tr>
				</table>
				<p>&nbsp;</p>
				<p align="center"> 
					&nbsp;&nbsp; 
					<input name="btnConfirm" type="submit" id="btnConfirm" value="Confirm Order &gt;&gt;">
				</form>
				</fieldset>
			<p>&nbsp;</p>
			</div>
			<div class="footer">
				<p>&copy; info@mystore.com<br/> All rights reserved.</p>
			</div>
			</div>
	</body>
</html>