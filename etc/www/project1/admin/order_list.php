<?php
	session_start();
	if(!isset($_SESSION['login']))
	{
		header("location:index.php");
	}
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../CSS/style.css" media="screen" />
	</head>
	<body>
		<div class="wrapper">
		<?php
			require_once "../library/header.php";
			require_once "../library/content.php";
		?>
		<div class="rightcontent">
		<center><h3>List of Order</h3></center>
		</div>
		<div class="footer">
			<p>&copy; info@employee. All rights reserved.</p>
		</div>
		</div>
	</body>
</html>