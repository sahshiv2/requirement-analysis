<?php
session_id();
session_start();
$sid=session_id();
require_once ('library/sql.php');
require_once ('library/order.php');
$db=new DB();
$cartitem=("select * from cart where ctid='$sid'");
$item=$db->query($cartitem);
$citem=mysql_num_rows($item);
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
				<?php
				if(!($citem>0))
				{
					header('Location:bag.php');
					exit();
				}
				header ('Location:signin.php');
				exit();
				?>
			</div>
			<div class="footer">
				<p>&copy; info@mystore.com<br/> All rights reserved.</p>
			</div>
			</div>
	</body>
</html>