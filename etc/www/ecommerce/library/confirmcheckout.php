<?php
session_id();
$sid=session_id();
$requiredField = array('ShippingFirstName', 'ShippingLastName', 'ShippingAddress', 'ShippingPhone', 'ShippingCity', 'ShippingPostalCode',
                       'PaymentFirstName', 'PaymentLastName', 'PaymentAddress', 'PaymentPhone', 'PaymentCity', 'PaymentPostalCode');
require_once 'library/sql.php';
$db=new DB();
$cart=$db->query("SELECT * from cart where ctid='$sid'");
$numitem  = mysql_num_rows($cart);
$subtotal = 0;
?>
<center>Step 2 Of 3 : Confirm Order </center>

<fieldset >
<legend><font color="red"><b>ordered item</b></legend>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>?step=3" method="post" name="frmCheckout" id="frmCheckout">
    <table align="center" cellpadding="2" cellspacing="1" border="0px">
        <tr bgcolor="white"> <td  colspan="4" align="center">Ordered Item</td></tr>
        <tr bgcolor="white"> <td>Item</td><td>Quantity</td><td> Price(Rs.)</td><td>Total(Rs.)</td></tr>
        <?php

for ($i = 0; $i < $numitem; $i++)
{
	$row=mysql_fetch_assoc($cart);
	$subtotal+=$row['quantity']*$row['price'];
?>
        <tr bgcolor="white"> 
			<td><?php echo $row['productname']; ?></td>
            <td><?php echo $row['quantity']; ?></td>
            <td><?php echo$row['price']; ?></td>
            <td><?php echo $row['quantity']*$row['price']; ?></td>
        </tr>
        <?php
}
?>
        <tr bgcolor="white"> 
            <td align="right"  colspan="3">Sub-total</td>
            <td><?php echo "Rs. ".$subtotal; ?></td>
        </tr>
        <tr bgcolor="white"> 
            <td align="right" colspan="3">Tax</td>
            <td><?php echo "13%"; ?></td>
        </tr>
        <tr bgcolor="white"> 
            <td align="right" colspan="3">Total</td>
            <td><?php echo "Rs. ".(0.13*$subtotal+$subtotal); ?></td>
        </tr>
    </table>
	</fieldset>
    <p>&nbsp;</p>
    <fieldset style="width:460px">
<legend><font color="red"><b>Shippping information</b></legend>
    <table width="550" border="0" align="center" cellpadding="2">
        <tr> 
            <td width="150">First Name</td>
            <td><?php echo $_POST['ShippingFirstName']; ?>
                <input name="hidShippingFirstName" type="hidden" id="hidShippingFirstName" value="<?php echo $_POST['ShippingFirstName']; ?>"></td>
        </tr>
        <tr> 
            <td width="150">Last Name</td>
            <td><?php echo $_POST['ShippingLastName']; ?>
                <input name="hidShippingLastName" type="hidden" id="hidShippingLastName" value="<?php echo $_POST['ShippingLastName']; ?>"></td>
        </tr>
        <tr> 
            <td width="150">Address</td>
            <td><?php echo $_POST['ShippingAddress']; ?>
                <input name="hidShippingAddress" type="hidden" id="hidShippingAddress" value="<?php echo $_POST['ShippingAddress']; ?>"></td>
        </tr>
        <tr> 
            <td width="150">Phone Number</td>
            <td><?php echo $_POST['ShippingPhone'];  ?>
                <input name="hidShippingPhone" type="hidden" id="hidShippingPhone" value="<?php echo $_POST['ShippingPhone']; ?>"></td>
        </tr>
        <tr> 
            <td width="150">City</td>
            <td><?php echo $_POST['ShippingCity']; ?>
                <input name="hidShippingCity" type="hidden" id="hidShippingCity" value="<?php echo $_POST['ShippingCity']; ?>" ></td>
        </tr>
        <tr> 
            <td width="150">Postal Code</td>
            <td><?php echo $_POST['ShippingPostalCode']; ?>
                <input name="hidShippingPostalCode" type="hidden" id="hidShippingPostalCode" value="<?php echo $_POST['ShippingPostalCode']; ?>"></td>
        </tr>
    </table>
	</fieldset>
    <p>&nbsp;</p>
          <fieldset style="width:460px ; >
	<legend><font color="red"><b>payment information</b></legend>
		 <table width="550" border="0" align="center" cellpadding="2">
        <tr> 
            <td width="150">First Name</td>
            <td><?php echo $_POST['PaymentFirstName']; ?>
                <input name="hidPaymentFirstName" type="hidden" id="hidPaymentFirstName" value="<?php echo $_POST['PaymentFirstName']; ?>"></td>
        </tr>
        <tr> 
            <td width="150">Last Name</td>
            <td><?php echo $_POST['PaymentLastName']; ?>
                <input name="hidPaymentLastName" type="hidden" id="hidPaymentLastName" value="<?php echo $_POST['PaymentLastName']; ?>"></td>
        </tr>
        <tr> 
            <td width="150">Address</td>
            <td><?php echo $_POST['PaymentAddress']; ?>
                <input name="hidPaymentAddress" type="hidden" id="hidPaymentAddress" value="<?php echo $_POST['PaymentAddress']; ?>"></td>
        <tr> 
            <td width="150">Phone Number</td>
            <td><?php echo $_POST['PaymentPhone'];  ?> <input name="hidPaymentPhone" type="hidden" id="hidPaymentPhone" value="<?php echo $_POST['PaymentPhone']; ?>"></td>
        </tr>
        <tr> 
            <td width="150">City</td>
            <td><?php echo $_POST['PaymentCity']; ?>
                <input name="hidPaymentCity" type="hidden" id="hidPaymentCity" value="<?php echo $_POST['PaymentCity']; ?>"></td>
        </tr>
        <tr> 
            <td width="150">Postal Code</td>
            <td><?php echo $_POST['PaymentPostalCode']; ?>
                <input name="hidPaymentPostalCode" type="hidden" id="hidPaymentPostalCode" value="<?php echo $_POST['PaymentPostalCode']; ?>"></td>
        </tr>
		 <tr>
        <td width="150">Payment Method </td>
        <td><?php echo $_POST['optPayment'] == 'paypal' ? 'Paypal' : 'Cash on Delivery'; ?>
          <input name="hidPaymentMethod" type="hidden" id="hidPaymentMethod" value="<?php echo $_POST['optPayment']; ?>" />
        </tr>
    </table>
   </fieldset>
    <p>&nbsp;</p>
    <p align="center"> 
        <input name="btnBack" type="button"   style="font-face: 'Comic Sans MS'; font-size: larger; color: teal; background-color: #FFFFC0;id="btnack" value=" Modify Shipping/Payment Info" onClick="window.location.href='checkout.php?step=1';" >
        &nbsp;&nbsp; 
        <input name="btnConfirm" type="submit"  style="font-face: 'Comic Sans MS'; font-size: larger; color: teal; background-color: #FFFFC0 ;id="btnback" value="Confirm Order ">
</form>
<p>&nbsp;</p>
