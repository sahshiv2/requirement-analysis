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
				<p><center>This is MY FASHION STORE. A Complete store for latest fashion.</center></p>
			
			</div>
			<div class="footer">
				<p>&copy; info@employee. All rights reserved.</p>
			</div>
		</div>
	</body>
	</html>