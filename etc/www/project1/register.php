<?php
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
				<h2 align="center">New Customer Registration Form<h2>
				<form name="form1" method="post" onsubmit="return validateForm()" action="add.php">
				<center><br/>
				<?php echo isset($_GET['msg']) ? $_GET['msg'] : ''; ?>
				<table align="center" cellpadding="5px">
				<tr><th><center>Fields marked * are mandatory</center></th></tr>
				<tr><th align="right">*First Name:</th><th><input name="fname" value="Firstname" type="text" onBlur="getfname()" onfocus="clearfname()">
				<div id="firstname-error" class="error"></div></th></tr>
				<tr><th align="right">*Last Name:</th><th><input type="text" value="Lastname" name="lname" onBlur="getlname()" onfocus="clearlname();">
				<div id="lastname-error" class="error"></div></th></tr>
				<tr><th align="right">*Password:</th><th><input type="password" name="password"  />
				<div id="password-error" class="error"></div></th></tr>
				<tr><th align="right">Confirm Password:</th><th><input type="password" name="repassword"/></th></tr>
				<tr><th align="right">Country:</th><th><input type="text" name="country"/></th></tr>
				<tr><th align="right">City:</th><th><input type="text" name="city"/></th></tr>
				<tr><th align="right">*E-mail:</th><th><input type="text" name="email"/>
				<div id="email-error" class="error"></div></th></tr>
				<tr><th align="right">Phone:</th><th><input type="text" name="phone"/></th></tr>
				<tr><th><input type="submit" value="SUBMIT"/></th></tr>
				</table></center>
			</div>
			<div class="footer">
				<p>&copy; info@mystore.com<br/> All rights reserved.</p>
			</div>
			</div>
	</body>
</html>
	