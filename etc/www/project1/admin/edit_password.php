<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("location:index.php");
	exit();
}
?>

<html>
	<head>
		<title>Dashboard</title>
		<link rel="stylesheet" type="text/css" href="../CSS/style.css" media="screen" />
	</head>
	<body>
		<div class="wrapper">
			<?php
				require_once '../library/header.php';
				require_once '../library/content.php';
			?>
			<div class="rightcontent">
				<br/><br/><center>
				<form action="update.php" method='post'>
				<center><br/><br/>
				<?php echo isset($_GET['msg']) ? $_GET['msg'] : ''; ?>
				<br/><br/><table align='center'>
				<tr><th>Old Password:</th><th><input type="password" name="passsword" size="20"/></th></tr>
				<tr><th>New Password:</th><th><input type="password" name="newpassword" size="20" /></th></tr>
				<tr><th>Confirm Password:</th><th><input type="password" name="confirmpassword" size="20" /></th></tr>
				<tr><th><center><input type="submit" value="Submit"/></th></tr>
				</table></center>
			</div>
			<div class="footer">
				<p>&copy; info@employee. All rights reserved.</p>
			</div>
		</div>
	</body>
</html>

