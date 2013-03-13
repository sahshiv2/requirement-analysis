<?php

   
	include('sql.php');
	$db=new DB();
	
   if(isset($_GET['user']))
   {
		$id= $_GET['user'];
   }
   if(isset($_GET["update"]))
   {
	$firstname=$_GET["firstname"];
	$lastname=$_GET["lastname"];
	$address=$_GET["address"];
	$position=$_GET["position"];
	$description=$_GET["description"];
	$status=$_GET["status"];
	$department=$_GET["department"];
	$id=$_GET["id"];
	if($_GET["file"]!= "")
	{
		$file=$_GET["file"];
	}
	else
	{
		$imagesql="SELECT `image` FROM `addmember` WHERE id =".$id;
		$imgresult = mysql_query($imagesql) or die(mysql_error());
		 if(mysql_num_rows($imgresult)>0){ 
		 while($imgrow=mysql_fetch_array($imgresult)){
		 $file=$imgrow['image'];
		
		 }
		 }
		
	}
	 

	$query="UPDATE `employee_management`.`addmember` SET `firstname` = '$firstname',
`lastname` = '$lastname',
`address` = '$address',
`position` = '$position',
`description` = '$description',
`status` = '$status',
`department` = '$department',
`image` = '$file'
 WHERE `addmember`.`id` =".$id;
	
	if(mysql_query($query))
	echo "<center>Record Updated</center><br>";
	else
	echo "mar dg";

	}
   $sql = "SELECT * FROM `addmember` WHERE `id`=".$id;


   $result = mysql_query($sql) or die(mysql_error());
   

   if(mysql_num_rows($result)>0){
	
	while($row=mysql_fetch_array($result)){
?>




<html>
<head>

		<title>Employee Management System</title>
	</head>

			<?php
				require_once('include/design.php');
			?>
		
					
					
			
			
			<body bgcolor="silver">
			<center>

			
					<h1><b>user info</b></h1>
				</center>

				
				<center>
				<form name="login" action="" onsubmit="" method="GET" align="left" enctype="multipart/form-data">
						<input type="hidden" name="id"  value="<?php echo $id;?>"/>
						<table border="1">
						
						<tr>
								<td height="40",width="40">
									
									
									<label for="file">Your Photo </label>
									
								</td>
								<td>
								<img src="<?php echo 'employee/'.$row['image'];?>" " width=100 height=100 style="border:0"></img>
								
									<input type="file" name="file" id="file" value="<?php echo $row['image'];?>"/>
				
								</td>
							</tr>
						
						
						
							<tr>
									<td>First Name :</td>
									<td><input type="text" name="firstname" value="<?php echo $row['firstname'];?>"/> </br></td>
							</tr>
							
							<tr>
									<td>Last Name :</td>
									<td><input type="text" name="lastname" value="<?php echo $row['lastname'];?>"/> </br></td>
							</tr>
							<tr>
									<td>Address :</td>
									<td><input type="text" name="address" value="<?php echo $row['address'];?>"/> </br></td>
							</tr>
							<tr>
									<td>Position :</td>
									<td><input type="text" name="position" value="<?php echo $row['position'];?>" /> </br></td>
							</tr>
							<tr>
									<td>Descriptions :</td>
									<td><input type="textarea" name="description" value="<?php echo $row['description'];?>" /> </br></td>
							</tr>	
							<tr>
									<td>Status :</td>
									<td><input type="boolean" name="status" value="<?php echo $row['status'];?>" /> </br></td>
							</tr>
							<tr>
									<td>Department :</td>
									<td><select name="department"> 
												  <option value="php" <?php if($row['department']=='php') echo 'selected'; ?> >PHP</option>
												  <option value="net" <?php if($row['department']=='net') echo 'selected'; ?> >.Net</option>
												  <option value="graphics" <?php if($row['department']=='graphics') echo 'selected'; ?> >Graphics</option>
												  <option value="css" <?php if($row['department']=='css') echo 'selected' ?> >CSS</option>
										</select> 
									</td>
									
									<?php if($row['department']=='php') echo 'selected' ?>
									
							</tr>
							
							
							
					</table> 
					<input type="submit" name="update" value="Update" />
					
					</form>
					<a href="mainpage.php">Move to Main Page</a>				
					
<?php
}
}
?>
					
