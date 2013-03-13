<?php
session_start();
$user=$_SESSION['user'];
require_once('library/sql.php');
$db=new DB();
$account=$db->query("SELECT * FROM customer WHERE email='$user'");
?>
<html>
	<head>
		<title>MYSTORE</title>
		<link rel="stylesheet" type="text/css" href="CSS/styles.css" media="screen" />
		<script type="text/javascript" src="JS/script.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<?php
				require_once 'library/headers.php';
				require_once 'library/contents.php';
			?>
			<div class="rightcontent">
				<center><h3>WELCOME TO YOUR ACCOUNT</h3></center>
				<?php
				if(mysql_num_rows($account)==1)
				{
					while($row=mysql_fetch_assoc($account))
					{
					?>
						<center><br/><br/>
						<br/><br/><table align="center" cellpadding="10px">
						<tr><th align="right">First Name:</th><th align="left"><?php echo $row['sfname']; ?>
						<tr><th align="right">Last Name:</th><th align="left"><?php echo $row['slname']; ?>
						<tr><th align="right">Address:</th><th align="left"><?php echo $row['saddress']; ?>
						<tr><th align="right">City:</th><th align="left"><?php echo $row['scity']; ?>
						<tr><th align="right">Email:</th><th align="left"><?php echo $row['Email']; ?>
						<tr><th align="right">Phone:</th><th align="left"><?php echo $row['phone']; ?>
					<?php
					}
				}
				?>
				</table>
				<a href="pwdchange.php?edit" class="link_td" style="text-decoration:none; padding:10px;">Change Password</a>
			</div>
			<div class="footer">
				<p> </p>
			</div>
			</div>
	</body>
</html>