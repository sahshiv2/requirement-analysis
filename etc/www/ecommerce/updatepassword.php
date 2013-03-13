<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("location:index.php?msg=Session Expired");
	exit();
}
require_once ('../library/sql.php');
$db=new DB();
if(isset($_GET["deletecustomer"]))
{
	$id = $_GET["deletecustomer"];
	$value = mysql_query("DELETE FROM customer WHERE customer.id =".$id);
	if($value)
	{
		$msg = "Deleted successfully";
	}
	else
	{
		$msg = "Error on deleting";
		header("Location: customer.php?msg=$msg");
		exit();
	}
}
$result=$db->query("select * FROM customer");
?>
<html>
	<head>
	<title>Customers</title>
	<link rel="stylesheet" type="text/css" href="../CSS/styles.css" media="screen" />
	</head>
	<body>
		<div class="wrapper">
			<?php
				require_once '../library/header.php';
				require_once '../library/content.php';
			?>
			<div class="rightcontent">
				<?php
				if(mysql_num_rows($result)>0)
				{
					?>
						<br/><table align='center' border='1'>
						 <tr><th>First Name</th>
						 <th>Last Name</th><th>Country</th>
						 <th>City</th><th>E-mail</th>
						 <th>Phone</th></tr>
					<?php
					while($row=mysql_fetch_assoc($result))
					{
					?>
						<tr><td><?php echo $row['sfname'];?></td>
						<td><?php echo $row['slname'];?></td>
						<td><?php echo $row['saddress'];?></td>
						<td><?php echo $row['scity'];?></td>
						<td><?php echo $row['Email'];?></td>
						<td><?php echo $row['phone'];?></td>
						<td><a href="customer.php?deletecustomer=<?php echo $row['id'];?>" style="text-decoration:none;">delete</a></td></tr>
					<?php
					}
				}
				
				else
					header("Location:index.php?msg=no customers are registered");
				?>
				</table>
			</div>
			<div class="footer">
				
			</div>
			
		</div>
	</body>
</html>