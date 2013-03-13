<?php
function order()
{
	$orderid = 0;
	$requiredField = array('hidShippingFirstName', 'hidShippingLastName', 'hidShippingAddress', 'hidShippingCity', 'hidShippingPostalCode',
						   'hidPaymentFirstName', 'hidPaymentLastName', 'hidPaymentAddress', 'hidPaymentCity', 'hidPaymentPostalCode', 'hidPaymentMethod');
	extract($_POST);
		
	
	$order = "INSERT INTO orderdetail(sfname, slname, saddress, sphone, scity, pfname, plname, paddress, pphone, pcity )
			VALUES ('$hidShippingFirstName', '$hidShippingLastName', '$hidShippingAddress', '$hidShippingPhone', '$hidShippingCity', 
			'$hidShippingPostalCode', '$hidPaymentFirstName', '$hidPaymentLastName', '$hidPaymentAddress', '$hidPaymentPhone', 
			'$hidPaymentCity')";
	$orderentry=mysql_query($order) or die(mysql_error());
	$orderid = mysql_insert_id();
	$cartcontent = cartcontent();
	if (count($cartcontent))
	{
		foreach ($cartcontent as $citem) 
		{
			
			$insert = mysql_query("INSERT INTO orders (oid, orderdate, pid, price, quantity) VALUES 
					($orderid, NOW(), {$citem['pid']}, {$citem['price']}, {$citem['quantity']})") or die(mysql_error());				
		}
		$sid = session_id();
		mysql_query("DELETE FROM cart WHERE ctid ='$sid'");	
	}
	return $orderid;
}
function cartcontent()
{
	$cartcontent = array();
	$sid = session_id();
	$sql = "SELECT * FROM cart WHERE ctid='$sid'";
	$result = mysql_query($sql);
	while ($row = mysql_fetch_assoc($result))
	{			
		$cartcontent[] = $row;
	}
	return $cartcontent;
}
?>