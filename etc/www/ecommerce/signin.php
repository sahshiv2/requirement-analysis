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
		header('Location:myaccount.php');
		exit();
	}
	else
	{
		header('location:info.php');
		exit();
	}
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
				<center><table cellpadding="50px">
				<tr><td><b>New Customer<br/><br/></b>
						<p>By making an account you can purchase it faster</p>
						<br/><a href="register.php" class="link_td" style="text-decoration:none; padding:10px;">Register Account</a>
						
						
				<td>
				<form name="login" action="login.php" method="post" onsubmit="return loginvalidate()" accept-charset="utf-8">
				<center><br/>
				<b>Registered Customer</b>
				<br/><br/><table align="center" cellpadding="5px">
				<tr><th align="right">E-mail:</th><th><input type="text" name="email"/>
				<div id="email-error" class="error"></div></th></tr>
				<tr><th align="right">Password:</th><th><input type="password" name="password"/>
				<div id="password-error" class="error"></div></th></tr>
				<tr><th><input type="submit" value="SUBMIT"/></th></tr>
				</table></center>
				</td></tr>
				</table></center>
			</div>
			<div class="footer">
				<p>copy right content</p>
			</div>
		</div>
	</body>
</html>
	