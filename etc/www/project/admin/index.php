<?php
	session_start();
	if(isset($_SESSION['login']))
	{
		header("Location: main.php");
		exit;
	}
?>
<html>
	<head>
		<title>Login - My Store</title>
		<link rel="stylesheet" media="screen" href="style.css">
		<script type="text/javascript" src="../JS/script.js"></script>
	</head>
	<body>
		<br/><br/><center><h1>WELCOME TO MY STORE</h1></center>
		<form name="login" id="login" method="post" action="login.php">
		<center><br/><br/>
		<?php echo isset($_GET['msg']) ? $_GET['msg'] : ''; ?>
		<br/><br/><table align='center'>
		<tr><th>Username:</th><th><input name="username" id="username" type="text"></th></tr>
		<tr><th>Password:</th><th><input name="pwd" id="pwd" type="password" Value=""></th></tr>
		<tr><th><center><input type='submit' value='Login'/></th></tr>
		</table></center>
	</body>
</html>
