<html>
	<body id="body">
		<div id="wrapper"> 
			<?php
				require_once('include/design.php');
			?>
			<div id="maincontent">

<form name="search" method="POST" action="search.php">
<input type="text" name="name" size=20 value="">
					<input type="submit" value="SEARCH">
				</form>

   <?php
	include('sql.php');
	$db=new DB();
	
	if(isset($_GET["deleteuser"]))
	{
		$id = $_GET["deleteuser"];
		$result= mysql_query("DELETE FROM `employee_management`.`addmember` WHERE `addmember`.`id` =".$id);
	}
   
   $sql = "SELECT `id` , `firstname` , `lastname`, `address` ,`status`, `department`, `image`
FROM `addmember`";


   $result = mysql_query($sql) or die(mysql_error());
   
   echo "We have ".mysql_num_rows($result)." employees ";
   
	if($result['status']==1)
		$status="active";
	else 
		$status="inactive";
   if(mysql_num_rows($result)>0){
	echo "<table align='center' border='1'>";
	echo "<tr>";
	echo "<th>id</th>";
	echo "<th>firstname</th>";
	echo "<th>lastname</th>";
	echo "<th>address</th>";
	
	echo "<th>status</th>";
	echo "<th>department</th>";
	echo "<th>photo</th>";
	echo "</tr>";
	while($row=mysql_fetch_array($result)){
	echo "<tr>";
	echo "<td><a href='userinfo.php?user=".$row['id']."'>".$row['id']."</a></td>";	
	echo "<td>".$row['firstname']."</td>";	
	echo "<td>".$row['lastname']."</td>";
	echo "<td>".$row['address']."</td>";
	echo "<td>".$status."</td>";
	echo "<td>".$row['department']."</td>";
	echo "<td><img src='employee/".$row['image']." ' width=40 height=40></td>";
	echo "<td><a href='employeeinfo.php?deleteuser=".$row['id']."'>delete</a></td>";
	
	
	echo "</tr>";
	}
	echo "</table>";
}
else{
echo "<center>No Records Found!</center>";
}

?>
<a href="logout.php">Signout</a>				
			</div>
			<div id="rightcontent">
				
				
				
			</div>
			<div id="footer">
					<h6>&copy;all rights reserved by Avinandan Dahal</h6>
			</div>
		</div>
</body>
</html> 