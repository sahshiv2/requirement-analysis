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
		<br><br><br><center><font color="white"><h1>WELCOME TO MY  MUSIC STORE</h1></font></center>
		<center>
		<fieldset style="width: 40%; height: 40%;"> 
		<legend><font color="blue"><font size="5"><b>Admin login </b></font></legend>
		<form name="login" id="login" method="post" action="login.php">
		
		
		<?php echo isset($_GET['msg']) ? $_GET['msg'] : ''; ?>
		<br/><br/><table border="10">
		<tr><th>Username:</th><th><input name="username" id="username" value="username" type="text" onclick="emptyusername()"></th></tr>
		
		<tr><th>Password:</th><th><input name="pwd" id="pwd" type="password" Value=""></th></tr>
		<th><center><input type='submit' value='Signin'/></th></center>
		
		</table>
		</fieldset>
		</center>
	</body>
</html>
