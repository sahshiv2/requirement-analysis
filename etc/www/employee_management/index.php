<?php
session_start();
if(isset($_SESSION['login']))
{
	header("location:member.php");
	//exit();
}
?>
<html>
<head>

		<title>Employee Management System</title>

		<link rel="stylesheet" media="screen" href="css/style.css">
	
		<script type="text/javascript" src="js/script.js"></script>
		
</head>

<center>
	<body id="body">
		<div id="wrapper"> 
			<div id="header">
				<div id="logo">
						<img src="image/logo1.gif">
				</div>
				<div id="banner"> 
						
							
						
						
				
				
				</div>	
						<div id="backgroundlogin">
						<div id="login">
								
								
						</div>
						
						</div>
				
			</div>
			
			
			<div id="leftcontent">
					<div id="leftcontenthome"> 	<a href="">Home</a>
					</div>
					<div id="leftcontentourservices"><a href="">Our Services</a><br/>
					</div>
					<div id="leftcontentgallery"><a href="gallery.html">Gallery</a><br/>
					</div>
					<div id="leftcontentaboutus"><a href="">About Us</a><br/>
					</div>
					<div id="leftcontentcontactus">
					
					</div>
					
			</div>
			
			
			<div id="maincontent">
			
				<form name="login" action="login.php" onsubmit="" method="post" align="left">
					<table border="1">
							<tr>
									<td>Username</td>
									<td><input type="text" name="username" /> </br></td>
							</tr>
							
							<tr>
									<td>Password</td>
									<td><input type="password" name="password" /> </br></td>
							</tr>
							
													
							<tr>
									<td></td>
									<td><input type="submit" value="Login" />
									<input type="reset" value="Reset"/></td>
							</tr>
							
							
					</table> 				
				</form>

								
			</div>
			<div id="rightcontent">
				
							
				
			</div>
			<div id="footer">
					<h6>&copy;All Right Reserved to Mr. Avinandan Dahal</h6>
			</div>
			
		</div>
			

</body>
</center>
	
		

</html> 