<?php
?>
<html>
<link rel="stylesheet" href="style.css"  type="text/css" />
<title>PHONE DIRECTORY</title>
<body>
	<div class="wrapper">
		<div class="header">
			<div class="logo">
				<img src="images/logo.jpg">
			</div>
			<div class="banner">
				<center>
				<h1>PHONE DIRECTORY</h1>
				<h2>Your contact solution</h2>
			</div>
		</div>
		<div class="content">
			<div class="leftcontent">
				<h2>advertisement</h2>
			</div>
			<div class="rightcontent">
				<form action="Login.php" method="post" >
					<center>
					<h1>Welcome to Phone Directory</h1>
					<br/>
					<h2> login to your directory </h2>
					<br />
					<b>Username  </b> 
					<input type="text" name="username" size="20" /><br /><br />
					<b>Password  </b>
					<input type="password" name="password" size="20" /><br /><br />
					<input type="submit" value="Login"  />
					<input type="reset" valur="Reset" />
				</form>  
				<br/>
				<br/>
				<?php
					echo "<a href='register.php'>Register member</a>";
				?>
			</div>
		</div>
		<div class="footer">
			copyright content goes here
		</div>
	</div>

</body>