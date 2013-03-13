<?php
session_start();
if (!isset($_SESSION['login']))
{
	header('Location: index.php');
	exit;
}

?>


<html>
	<body id="body">
		<div id="wrapper"> 
			<?php
				require_once('include/design.php');
			?>
			
			<div id="maincontent">
					<h1><b>Welcome to Employee Management System</b></h1>
				
				<a href="logout.php">Signout</a>				
			</div>
			<div id="rightcontent">
				
				Welcome to Employee Management System	!!!
				
			</div>
			<div id="footer">
					<h6>&copy;all rights reserved by Avinandan Dahal</h6>
			</div>
		</div>
</body>
</html> 