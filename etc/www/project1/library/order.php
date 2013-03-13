<?php
require_once 'library/sql.php';
$db=new DB();
function saveOrder()
{
	$orderId       = 0;
	$requiredField = array('hidShippingFirstName', 'hidShippingLastName', 'hidShippingAddress', 'hidShippingCity', 'hidShippingPostalCode',
						   'hidPaymentFirstName', 'hidPaymentLastName', 'hidPaymentAddress', 'hidPaymentCity', 'hidPaymentPostalCode');
}
?>