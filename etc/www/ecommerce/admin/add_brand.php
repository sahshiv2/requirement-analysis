<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("location:index.php?msg=Session Expired");
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
				<center><br>Insert New Brand</br><center>
				<?php echo isset($_GET['msg']) ? $_GET['msg'] : ''; ?>
				<form action="brand_add.php" method="post" cellpadding="10px">
				<br/><table align="center">
				<tr><th>Name:</th><th><input type="text" name="name" size="30" /></th></tr>
				<tr><th>Detail:</th><th><input type="text" name="detail" size="30"/></th></tr>
				<tr><th><input type="submit" value="SUBMIT"/></th></tr>
				</table></center></form>
			</div>
		<div class="footer">
			<p>&copyrightcontent.</p>
		</div>
		</div>
	</body>
</html>