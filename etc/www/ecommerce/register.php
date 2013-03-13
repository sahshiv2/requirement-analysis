<?php
session_start();
if(isset ($_SESSION['user']))
{
	header("Location:info.php");
	exit();
}
?>
<html>
	<head>
		<title>MYSTORE</title>
		<link rel="stylesheet" type="text/css" href="CSS/styles.css" media="screen" />
		<script type="text/javascript" src="JS/script.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<?php
				require_once 'library/headers.php';
				require_once 'library/contents.php';
			?>
			<div class="rightcontent">
			<h3 align="center">NEW CUSTOMER REGISTRATION FORM</h3>
				<form name="form1" method="post" onsubmit="return validateForm()" action="add.php">
				<center>
				<fieldset style="width:420px">
				<legend>Login Information</legend>
				<table width="400" border="0" align="center" cellpadding="2">
					<tr><td >E-mail:</td><td><input type="text" name="email" size="30"/>
					<div id="email-error" class="error"></div></td></tr>
					<tr><td >Password:</td><td><input type="password" name="password" size="30"/>
					<div id="password-error" class="error"></div></td></tr>
					<tr><td>Re Password:</td><td><input type="password" name="repassword" size="30"/></td></tr>
				</table>
				</fieldset>
				
				<fieldset style="width:420px">
				<legend>personal Information</legend>
				<?php echo isset($_GET['msg']) ? $_GET['msg'] : ''; ?>
				<table width="400" border="0" align="center" cellpadding="2">
					<tr><td >First Name:</td><td><input name="fname" value="" type="text" size="30">
					<div id="firstname-error" class="error"></div></td></tr>
					<tr><td >Last Name:</td><td><input type="text" value="" name="lname" size="30">
					<div id="lastname-error" class="error"></div></td></tr>
					<tr><td >Address:</td><td><input type="text" name="address" size="30"/>
					<div id="address-error" class="error"></div></td></tr>
					<tr><td >City:</td><td><input type="text" name="city" size="30"/>
					<div id="city-error" class="error"></div></td></tr>
					<tr><td >Phone:</td><td><input type="text" name="phone" size="30"/>
					<div id="phone-error" class="error"></div></td></tr>
				</table>
				</fieldset>
				
				<fieldset style="width:420px">
				<legend>Payment Information</legend>
				<table width="400" border="0" align="center" cellpadding="2">
					<tr> 
						<td width="150">Payment Information</td>
						<td><input type="checkbox" name="chkSame" id="chkSame" value="checkbox" onClick="return payment(this.checked);"> 
							<label for="chkSame">Same as personal </label></td>
					</tr>
					<tr> 
						<td width="150" >First Name:</td>
						<td ><input name="PaymentFirstName" type="text"  id="PaymentFirstName" size="30">
						<div id="Pfirstname-error" class="error"></div></td>
					</tr>
					<tr> 
						<td width="150" >Last Name:</td>
						<td ><input name="PaymentLastName" type="text"  id="PaymentLastName" size="30">
						<div id="Plastname-error" class="error"></div></td>
					</tr>
					<tr> 
						<td width="150" >Address:</td>
						<td ><input name="PaymentAddress" type="text"  id="PaymentAddress" size="30">
						<div id="Paddress-error" class="error"></div></td>
					</tr>
					<tr> 
						<td width="150">City:</td>
						<td ><input name="PaymentCity" type="text"  id="PaymentCity" size="30">
						<div id="Pcity-error" class="error"></div></td>
					</tr>
					<tr> 
						<td width="150" >Phone Number:</td>
						<td ><input name="PaymentPhone" type="text"  id="PaymentPhone" size="30">
						<div id="Pphone-error" class="error"></div></td>
					</tr>
					<tr>
						<td width="150">Payment Method </td>
						<td >
						<input name="optPayment" type="radio" value="paypal" checked="checked" />
						<label for="optPaypal" >Paypal</label>
						<input name="optPayment" type="radio" value="cod" />
						<label for="optCod">Cash on Delivery</label></td>
					  </tr>
					<tr><td><input type="submit" value="SUBMIT"/></td></tr>
				</table>
				</fieldset>
				</center>
			</div>
			<div class="footer">
				<p></p>
			</div>
			</div>
	</body>
</html>
	