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
				<div id="banner1"> 
						<script type="text/javascript">
						<!--
						var currentTime = new Date()
						var month = currentTime.getMonth() + 1
						var day = currentTime.getDate()
						var year = currentTime.getFullYear()
						document.write(month + "/" + day + "/" + year)
						//-->
						</script>
								<h4>It is now  
								<script type="text/javascript">
								<!--
								var currentTime = new Date()
								var hours = currentTime.getHours()
								var minutes = currentTime.getMinutes()
								if (minutes < 10){
								minutes = "0" + minutes
								}
								document.write(hours + ":" + minutes + " ")
								if(hours > 11){
								document.write("PM")
								} else {
								document.write("AM")
								}
								//-->
								</script>
								</h4>
						
				
				
				</div>	
				<div id="banner2"> 
					
				</div>
				
						<div id="backgroundlogin">
						<div id="login">
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
						
						</div>
				
			</div>
			
			
			<div id="leftcontent">
					<div id="leftcontentdisplay"> 	<a href="">Display</a>
					</div>
					<div id="leftcontentadd"><a href="">Add</a><br/>
					</div>
					<div id="leftcontentremove"><a href="">Remove</a><br/>
					</div>
					
					
					
			</div>
			
			
			<div id="maincontent">
					<h1><b>Welcome to Employee Management System</b></h1>
				member
				<form name="login" action="" onsubmit="" method="post" align="left">
						<table border="1">
							<tr>
									<td>First Name :</td>
									<td><input type="text" name="firstname" /> </br></td>
							</tr>
							
							<tr>
									<td>Last Name :</td>
									<td><input type="text" name="lastname" /> </br></td>
							</tr>
							<tr>
									<td>Address :</td>
									<td><input type="text" name="address" /> </br></td>
							</tr>
							<tr>
									<td>Position :</td>
									<td><input type="text" name="position" /> </br></td>
							</tr>
							<tr>
									<td>Detail :</td>
									<td><input type="textarea" name="detail" /> </br></td>
							</tr>	
							<tr>
									<td>Status :</td>
									<td><input type="boolean" name="status" /> </br></td>
							</tr>
							<tr>
									<td>Department :</td>
									<td><select> <option value="php">PHP</option>
												  <option value="net">.Net</option>
												  <option value="graphics">Graphics</option>
												  <option value="css">CSS</option>
										</select> 
							</tr>
							<tr>
								<td>
									
									<form action="upload_file.php" method="post" enctype="multipart/form-data">
									<label for="file">Upload Your Photo </label>
								</td>
								<td>
									<input type="file" name="file" id="file" />
									<br />
									
									</form>
								</td>
							</tr>
							<tr>
									<td></td>
									<td><input type="submit" value="Insert" />
									<input type="reset" value="Reset"/></td>
							</tr>
							
							
					</table> 		
				
				
				
				
				
				
				</form>
				<a href="logout.php">Signout</a>				
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