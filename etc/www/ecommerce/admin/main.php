<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("location:index.php");
}

?>
<html>
	<head>
		<title>musicstore.com</title>
		<link rel="stylesheet" type="text/css" href="../CSS/style.css" media="screen" />
	</head>
	<body>
		<div class="wrapper">
			<?php
				require_once '../library/header.php';
				require_once '../library/content.php';
			?>
			
			
			<div class="rightcontent">
				<p><center>.</center></p>
			
			</div>
			<div class="footer">
				<p>@copyrightcontent</p>
			</div>
		</div>
	</body>
	</html>