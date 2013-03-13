<?php
?>
<html>
<head>

		<title>Employee Management System</title>

		<link rel="stylesheet" media="screen" href="style.css">
	
		<script type="text/javascript" src="js/script.js"></script>
		
</head>


			<div id="header">
				<div id="logo">
						<img src="image/logo1.gif">
				</div>
				<div id="banner"> 
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
					
			</div>
			
			<div id="leftcontent">
				<a href="employeeinfo.php">Display</a><br/>
				<a href="register.php">Add</a><br/>
				<a href="">Search</a><br/>
			</div>
		
	</body>
</html>
			
			