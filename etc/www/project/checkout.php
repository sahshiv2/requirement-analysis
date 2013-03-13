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
				elseif (isset($_GET['step']) && (int)$_GET['step'] > 0 && (int)$_GET['step'] <= 3)
				{
					$step = (int)$_GET['step'];
					if ($step == 1) 
					{
						require_once 'library/shippinginfo.php';
						$pageTitle   = 'Checkout - Step 1 of 2';
					} 
					else if ($step == 2) 
					{
						require_once 'library/confirmcheckout.php';
						$pageTitle   = 'Checkout - Step 2 of 2';
					} 
					else if ($step == 3) 
					{
						$orderid = order();
						$_SESSION['orderid'] = $orderid;
						if ($_POST['hidPaymentMethod'] == 'cod')
						{
							header('Location: success.php');
							exit();
						}
					}
				}
				?>
			</div>
			<div class="footer">
				<p>&copy; info@mystore.com<br/> All rights reserved.</p>
			</div>
			</div>
	</body>
</html>