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
		
		<script type="text/javascript" src="../JS/script.js"></script>
	</head>
	<body bgcolor="crimson">
		<br/><br/><center><h1>WELCOME TO MY  MUSIC STORE</h1></center>
		<form name="login" id="login" method="post" action="login.php">
		<center><br/><br/>
		
		<?php echo isset($_GET['msg']) ? $_GET['msg'] : ''; ?>
		<br/><br/><table border="5"align='center'height="20%" width="20%">
		<tr><th>Username:</th><th><input name="username" id="username" value="username" type="text" onclick="emptyusername()"></th></tr>
		
		<tr><th>Password:</th><th><input name="pwd" id="pwd" type="password" Value=""></th></tr>
		<th><center><input type='submit' value='Signin'/></th></center>
		</table></center>
	</body>
</html>
