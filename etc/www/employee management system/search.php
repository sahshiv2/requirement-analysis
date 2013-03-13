<html>
	<body id="body">
		<div id="wrapper"> 
			<?php
				require_once('include/design.php');
			?>
			<div id="maincontent">

<?php
	require_once ('sql.php');
	$db=new DB();
	$name=$_POST['name'];
	$query="SELECT * FROM addmember WHERE firstname LIKE '%$name%'";
	$result=mysql_query($query) or die(mysql_error());
	$number=mysql_num_rows($result);
	if($number>0)
	{
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
		while($row=mysql_fetch_array($result))
		{
			echo "<tr>";
	echo "<td><a href='userinfo.php?user=".$row['id']."'>".$row['id']."</a></td>";	
	echo "<td>".$row['firstname']."</td>";	
	echo "<td>".$row['lastname']."</td>";
	echo "<td>".$row['address']."</td>";
	$value= $row['status'];
			if($value==1)
				$value="Active";
			else
				$value="Inactive";
	echo "<td>".$value."</td>";
	echo "<td>".$row['department']."</td>";
	echo "<td><img src='employee/".$row['image']." ' width=40 height=40></td>";
	echo "<td><a href='employeeinfo.php?deleteuser=".$row['id']."'>delete</a></td>";
	
	
	echo "</tr>";
	}
	echo "</table>";
	}
	else
	{
		echo "<center>no employees are registered</center>";	
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