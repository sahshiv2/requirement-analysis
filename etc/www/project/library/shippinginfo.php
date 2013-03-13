<center>Step 1 Of 3 : Enter Shipping And Payment Information</center>
<p>&nbsp;</p>
<center>
<form action=" <?php echo $_SERVER['PHP_SELF']; ?>?step=2" method="post" name="frmCheckout" id="frmCheckout" onSubmit="return checkinfo();">
	<fieldset style="width:420px">
	<legend>Shipping Information</legend>
	<table width="400" border="0" align="center" cellpadding="2">
		
		<tr> 
			<td width="150">First Name</td>
			<td><input name="ShippingFirstName" type="text"  id="ShippingFirstName" size="30" maxlength="50">
			<div id="Sfirstname-error" class="error"></div></td>
		</tr>
		<tr> 
			<td width="150">Last Name</td>
			<td ><input name="ShippingLastName" type="text"  id="ShippingLastName" size="30" maxlength="50">
			<div id="Slastname-error" class="error"></div></td>
		</tr>
		<tr> 
			<td width="150">Address</td>
			<td ><input name="ShippingAddress" type="text"  id="ShippingAddress" size="30" maxlength="100">
			<div id="Saddress-error" class="error"></div></td>
		</tr>
		<tr> 
			<td width="150">Phone Number</td>
			<td ><input name="ShippingPhone" type="text"  id="ShippingPhone" size="30" maxlength="32">
			<div id="Sphone-error" class="error"></div></td>
		</tr>
		<tr> 
			<td width="150">City</td>
			<td ><input name="ShippingCity" type="text"  id="ShippingCity" size="30" maxlength="32">
			<div id="Scity-error" class="error"></div></td>
		</tr>
	</table>
	</fieldset>
	<p>&nbsp;</p>
	<fieldset style="width:420px">
	<legend>Payment Information</legend>
	<table width="400" border="0" align="center" cellpadding="2">
		<tr> 
			<td width="150">Payment Information</td>
			<td><input type="checkbox" name="chkSame" id="chkSame" value="checkbox" onClick="return setinfo(this.checked);"> 
				<label for="chkSame">Same as shipping information</label></td>
		</tr>
		<tr> 
			<td width="150" >First Name</td>
			<td ><input name="PaymentFirstName" type="text"  id="PaymentFirstName" size="30" maxlength="50">
			<div id="Pfirstname-error" class="error"></div></td>
		</tr>
		<tr> 
			<td width="150" >Last Name</td>
			<td ><input name="PaymentLastName" type="text"  id="PaymentLastName" size="30" maxlength="50">
			<div id="Plastname-error" class="error"></div></td>
		</tr>
		<tr> 
			<td width="150" >Address</td>
			<td ><input name="PaymentAddress" type="text"  id="PaymentAddress" size="30" maxlength="100">
			<div id="Paddress-error" class="error"></div></td>
		</tr>
		<tr> 
			<td width="150" >Phone Number</td>
			<td ><input name="PaymentPhone" type="text"  id="PaymentPhone" size="30" maxlength="32">
			<div id="Pphone-error" class="error"></div></td>
		</tr>
		<tr> 
			<td width="150" >City</td>
			<td ><input name="PaymentCity" type="text"  id="PaymentCity" size="30" maxlength="32">
			<div id="Pcity-error" class="error"></div></td>
		</tr>
	  <tr>
		<td width="150">Payment Method </td>
		<td >
		<input name="optPayment" type="radio" value="paypal" checked="checked" />
		<label for="optPaypal" >Paypal</label>
		<input name="optPayment" type="radio" value="cod" />
		<label for="optCod">Cash on Delivery</label></td>
	  </tr>
	</table>
	</fieldset>
	<p>&nbsp;</p>
	</center>
		<center><input name="btnStep1" type="submit" value="Proceed &gt;&gt;"></center>
</form>