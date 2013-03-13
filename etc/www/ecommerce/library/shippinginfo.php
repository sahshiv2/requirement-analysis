<center><font color="blue"><b>Step 1 Of 3 : Enter Shipping And Payment Information</b></font></center><br>
<fieldset>
<legend><font color="blue"><b>Shippping information</b></legend>
<form action=" <?php echo $_SERVER['PHP_SELF']; ?>?step=2" method="post" name="frmCheckout" id="frmCheckout" onSubmit="return checkinfo();">
	<table width="400" border="0" align="center" cellpadding="2">
		
		<tr> 
			<td width="150">First Name</td>
			<td><input name="ShippingFirstName" type="text" class="box" id="ShippingFirstName" size="30" maxlength="50"></td>
			<td><div id="Sfirstname-error" class="error"></div></td>
		</tr>
		<tr> 
			<td width="150">Last Name</td>
			<td ><input name="ShippingLastName" type="text" class="box" id="ShippingLastName" size="30" maxlength="50"></td>
			<td><div id="Slastname-error" class="error"></div></td>
		</tr>
		<tr> 
			<td width="150">Address</td>
			<td ><input name="ShippingAddress" type="text" class="box" id="ShippingAddress" size="30" maxlength="100"></td>
			<td><div id="Saddress-error" class="error"></div></td>
		</tr>
		<tr> 
			<td width="150">Phone Number</td>
			<td ><input name="ShippingPhone" type="text" class="box" id="ShippingPhone" size="30" maxlength="32"></td>
			<td><div id="Sphone-error" class="error"></div></td>
		</tr>
		<tr> 
			<td width="150">City</td>
			<td ><input name="ShippingCity" type="text" class="box" id="ShippingCity" size="30" maxlength="32"></td>
			<td><div id="Scity-error" class="error"></div></td>
		</tr>
		<tr> 
			<td width="150">Postal / Zip Code</td>
			<td ><input name="ShippingPostalCode" type="text" class="box" id="ShippingPostalCode" size="30" maxlength="10"></td>
			<td><div id="Spostal-error" class="error"></div></td>
		</tr>
	</table>
	</fieldset>
	
	<fieldset >
	<legend><font color="blue"><b>payment information</b></legend>
	<table width="400" border="0" align="center" cellpadding="2">
		
			
			<td><input type="checkbox" name="chkSame" id="chkSame" value="checkbox"  onClick="return setinfo(this.checked);"> </td>
			<td>	<label for="chkSame" style="cursor:pointer">same as shipping</label></td>
		</tr>
		<tr> 
			<td width="150" class="label">First Name</td>
			<td ><input name="PaymentFirstName" type="text" class="box" id="PaymentFirstName" size="30" maxlength="50"></td>
			<td><div id="Pfirstname-error" class="error"></div></td>
		</tr>
		<tr> 
			<td width="150" class="label">Last Name</td>
			<td ><input name="PaymentLastName" type="text" class="box" id="PaymentLastName" size="30" maxlength="50"></td>
			<td><div id="Plastname-error" class="error"></div></td>
		</tr>
		<tr> 
			<td width="150" class="label">Address</td>
			<td ><input name="PaymentAddress" type="text" class="box" id="PaymentAddress" size="30" maxlength="100"></td>
			<td><div id="Paddress-error" class="error"></div></td>
		</tr>
		</tr>
		<tr> 
			<td width="150" class="label">Phone Number</td>
			<td ><input name="PaymentPhone" type="text" class="box" id="PaymentPhone" size="30" maxlength="32"></td>
			<td><div id="Pphone-error" class="error"></div></td>
		</tr>
		<tr> 
			<td width="150" class="label">City</td>
			<td ><input name="PaymentCity" type="text" class="box" id="PaymentCity" size="30" maxlength="32"></td>
			<td><div id="Pcity-error" class="error"></div></td>
		</tr>
		<tr> 
			<td width="150" class="label">Postal / Zip Code</td>
			<td ><input name="PaymentPostalCode" type="text" class="box" id="PaymentPostalCode" size="30" maxlength="10"></td>
			<td><div id="Ppostal-error" class="error"></div></td>
		</tr>
	</table>
	<p>&nbsp;</p>
	</fieldset>
	<fieldset>
	<legend><font color="blue"><b>payment method</b></legend>
	<table width="550" border="0" align="center" cellpadding="2">
	  <tr>
		
		<td >
		<input name="optPayment" type="radio" value="paypal" checked="checked" />
		<label for="optPaypal" style="cursor:pointer">Paypal</label>
		<input name="optPayment" type="radio" value="cod" />
		<label for="optCod" style="cursor:pointer">Cash on Delivery</label></td>
	  </tr>
	</table>
	</fieldset>
	<p>&nbsp;</p>
	</center>
		<center><input name="btnStep1" type="submit" value="Proceed "></center>
</form>