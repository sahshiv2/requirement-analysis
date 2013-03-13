<?php
session_start();
if(!isset($_SESSION['signin']))
{
	header('Location:signin.php');
	exit();
}
$user=$_SESSION['user'];
require_once('library/sql.php');
$db=new DB();
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
				<center><h3>YOUR DETAILS</h3></center>
				<br/><br/><center>
				<form action="updatepwd.php" method='post'>
				<center><br/><br/>
				<br/><br/><table align='center'>
				<tr><th align="right">Old Password:</th><th><input type="password" name="passsword" size="20"/></th></tr>
				<tr><th  align="right">New Password:</th><th><input type="password" name="newpassword" size="20" /></th></tr>
				<tr><th  align="right">Confirm Password:</th><th><input type="password" name="confirmpassword" size="20" /></th></tr>
				<tr><th><center><input type="submit" value="Submit"/></th></tr>
				</table></center>	
			</div>
			<div class="footer">
				<p>&copy; info@mystore.com<br/> All rights reserved.</p>
			</div>
			</div>
	</body>
</html>