<?php
session_start();
$sid=session_id();
require_once ('library/sql.php');
require_once ('library/order.php');
$db=new DB();
$cartitem=("select * from cart where ctid='$sid'");
$item=$db->query($cartitem);
$citem=mysql_num_rows($item);
if(isset($_SESSION['signin']))
{
	if(!($citem>0))
	{
		header('Location:account.php');
		exit();
	}
	else
	{
		header('location:step2.php');
		exit();
	}
}
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
				<center><table cellpadding="50px">
				<tr><td><b>New Customer<br/><br/></b>
						<br/>
						<p>By creating an account you will be able to shop faster, 
						be up to date on an order's status, and keep track of the 
						orders you have previously made.<p>
						<br/><a href="register.php" class="link_td" style="text-decoration:none; padding:10px;">Register Account</a>
						<a href="checkout.php?step=1" class="link_td" style="text-decoration:none; padding:10px;">Guest Checkout</a>
						
				<td>
				<form name="login" action="login.php" method="post" onsubmit="return loginvalidate()" accept-charset="utf-8">
				<center><br/>
				<b>Returning Customer</b>
				<br/><br/>
				Field with * are mandatory
				<br/><br/><table align="center" cellpadding="5px">
				<tr><th align="right">E-mail*:</th><th><input type="text" name="email"/>
				<div id="email-error" class="error"></div></th></tr>
				<tr><th align="right">Password*:</th><th><input type="password" name="password"/>
				<div id="password-error" class="error"></div></th></tr>
				<tr><th><input type="submit" value="SUBMIT"/></th></tr>
				</table></center>
				</td></tr>
				</table></center>
			</div>
			<div class="footer">
				<p>&copy; info@mystore.com<br/> All rights reserved.</p>
			</div>
		</div>
	</body>
</html>
	