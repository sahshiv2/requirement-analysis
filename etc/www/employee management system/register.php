
<?php
if(isset($_GET["insert"])){
	
	$firstname=$_GET["firstname"];
	$lastname=$_GET["lastname"];
	$address=$_GET["address"];
	$position=$_GET["position"];
	$description=$_GET["description"];
	$status=$_GET["status"];
	$department=$_GET["department"];
	$file=$_GET["file"];
	//$file="rr.jpg";
	
include('sql.php');
 $db=new DB();
$query="INSERT INTO `employee_management`.`addmember` (
`id` ,
`firstname` ,
`lastname` ,
`address` ,
`position` ,
`description` ,
`status` ,
`department` ,
`image`

)
VALUES (
NULL , '$firstname', '$lastname', '$address', '$position', '$description', '$status', '$department', '$file'
)";
if(mysql_query($query))
{
echo "<center>Record Inserted!</center><br>";
}
else
{
	echo "<center>////Record not Inserted!</center><br>";
}
	
}


?>

<html>
	<body id="body">
		<div id="wrapper"> 
			<?php
				require_once('include/design.php');
			?>
			<div id="maincontent">
			<center><br/><br/><br/>
				<form name="login" action="register.php" onsubmit="" method="GET" align="left" enctype="multipart/form-data">
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
									<td>Descriptions :</td>
									<td><input type="textarea" name="description" /> </br></td>
							</tr>	
							<tr>
									<td>Status :</td>
									<td><input type="boolean" name="status" /> </br></td>
							</tr>
							<tr>
									<td>Department :</td>
									<td><select name="department"> 
												  <option value="php">PHP</option>
												  <option value="net">.Net</option>
												  <option value="graphics">Graphics</option>
												  <option value="css">CSS</option>
										</select> 
									</td>
									
							</tr>
							<tr>
								<td>
									
									
									<label for="file">Upload Your Photo </label>
								</td>
								<td>
									<input type="file" name="file" id="file" />
				
									
								
								</td>
							</tr>
							<tr>
									<td></td>
									<td><input type="submit" name="insert" value="Insert" />
									<input type="reset" value="Reset"/></tsd>
							</tr>
							
					</table> 		
				
				
				<a href="mainpage.php">go back to mainpage</a>
			<a href="logout.php">Signout</a>				
			</div>
			<div id="rightcontent">
				
				welcome to employee management system			
				
			</div>
			<div id="footer">
					<h6>&copy;all rights reserved by Avinandan Dahal</h6>
			</div>
		</div>
</body>
</html> 
				
			

</body>
</center>
	
		

</html> 