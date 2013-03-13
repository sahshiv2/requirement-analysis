<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("location:index.php?msg=Session Expired");
	exit();
}
?>
<html>
	<head>
		<title>Brand</title>
		<link rel="stylesheet" type="text/css" href="../CSS/style.css" media="screen" />
	</head>
	<body>
		<div class="wrapper">
			<?php
				require_once '../library/header.php';
				require_once '../library/content.php';
			?>
			<div class="rightcontent">
				<center><br>Add New Brand</br><center>
				<?php echo isset($_GET['msg']) ? $_GET['msg'] : ''; ?>
				<form action="brand_add.php" method="post" cellpadding="10px">
				<br/><table align="center">
				<tr><th>Name:</th><th><input type="text" name="name"/></th></tr>
				<tr><th>Detail:</th><th><input type="text" name="detail"/></th></tr>
				<tr><th>Status:</td><td><input <?php echo !empty($data['status']) ? ' checked=""' : ''; ?>type="radio" name="status" id="state_yes" value="Published"/>Published
					<input <?php echo !empty($data['status']) ? ' checked=""' : ''; ?>type="radio" name="status" id="state_no" value="Not Published"/>Not Published
					</th></tr>
				<tr><th><input type="submit" value="SUBMIT"/></th></tr>
				</table></center></form>
			</div>
		<div class="footer">
			<p>&copy; info@employee. All rights reserved.</p>
		</div>
		</div>
	</body>
</html>