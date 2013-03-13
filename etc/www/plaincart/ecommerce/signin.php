<?php
?>
<html>
	<head>
		<title>MYSTORE</title>
		<link rel="stylesheet" type="text/css" href="CSS/styles.css" media="screen" />
	</head>
	<body>
		<div class="wrapper">
			<?php
				require_once 'library/headers.php';
				require_once 'library/contents.php';
			?>
	<div class="rightcontent">
				
		     
		<center><h1>WELCOME TO USER LOGIN</h1></center>
		   <form name="login" id="login" method="post" action="login.php">
		   <center><br/><br/>
	        <br/><br/><table border="5"align='center'height="20%" width="20%">
		     <tr><th>Phone no:</th><th><input name="phone no"  type="text" </th></tr>
		 
		     <tr><th>Password:</th><th><input name="pwd" id="pwd" type="password" Value=""></th></tr>
		     <tr> <th><center><input type='submit' value='SUBMIT'/></font></th></center></tr>

				</table>
                 <font color="blue"><p>NEW USER CAN  </FONT>
				 <a href="register.php" style="color: blue">REGISTER</a> 
				 </p>
				</div>
				
				
			<div class="footer">
				<p></p>
			</div>
		</div>
	</body>
</html>
	