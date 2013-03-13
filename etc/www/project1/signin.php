<?php
session_start();
if(isset($_SESSION['signin']))
{
	header('Location:account.php');
	exit();
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
				<tr><td>New Customer<br/>
						Register Account<br/>
						<p>Create your account for great 
						shopping Experience<p>
						<a href="register.php" style="text-decoration:none;">Register</a></td>
						
				<td>
				<form name="login" action="login.php" method="post" onsubmit="return loginvalidate()" accept-charset="utf-8">
				<center><br/><br/>
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
	