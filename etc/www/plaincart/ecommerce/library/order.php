<?php
function order()
{
	$orderid = 0;
	$requiredField = array('hidShippingFirstName', 'hidShippingLastName', 'hidShippingAddress', 'hidShippingCity', 'hidShippingPostalCode',
						   'hidPaymentFirstName', 'hidPaymentLastName', 'hidPaymentAddress', 'hidPaymentCity', 'hidPaymentPostalCode', 'hidPaymentMethod');
	extract($_POST);
		
	$hidShippingFirstName = ucwords($hidShippingFirstName);
	$hidShippingLastName = ucwords($hidShippingLastName);
	$hidPaymentFirstName = ucwords($hidPaymentFirstName);
	$hidPaymentLastName = ucwords($hidPaymentLastName);
	$hidShippingAddress = ucwords($hidShippingAddress);
	$hidPaymentAddress = ucwords($hidPaymentAddress);
	$hidShippingCity = ucwords($hidShippingCity);
	$hidPaymentCity = ucwords($hidPaymentCity);
	
	$order = "INSERT INTO orderdetail(sfname, slname, saddress, sphone, scity, scode, pfname, plname, paddress, pphone, pcity, pcode) VALUES 
           ('$hidShippingFirstName', '$hidShippingLastName', '$hidShippingAddress', '$hidShippingPhone', '$hidShippingCity', '$hidShippingPostalCode', 
			'$hidPaymentFirstName', '$hidPaymentLastName', '$hidPaymentAddress', '$hidPaymentPhone',  '$hidPaymentCity', '$hidPaymentPostalCode')";
	$orderentry=mysql_query($order);
	$orderid = mysql_insert_id();
	$cartcontent = cartcontent();
	$numitem = count($cartcontent);
	if (count($cartcontent))
	{
		foreach ($cartcontent as $citem) 
		{
			$insert = mysql_query("INSERT INTO orders (oid, orderdate, pid, quantity) VALUES 
					($orderid, NOW(), {$citem['pid']}, {$citem['quantity']})");				
		}
			$sid = session_id();
			$delete = mysql_query("DELETE FROM cart WHERE ctid ='$sid'");				
			
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