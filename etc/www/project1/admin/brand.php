<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("location:index.php?msg=Session Expired");
	exit();
}
require_once ('../library/sql.php');
$db=new DB();
if(isset($_GET["deletebrand"]))
{
	$id = $_GET["deletebrand"];
	$value = mysql_query("DELETE FROM brand WHERE brand.id =".$id);
	if($value)
	{
		$msg = "Deleted successfully";
	}
	else
	{
		$msg = "Error on deleting";
		header("Location: brand.php?msg=$msg");
		exit();
	}
}
$records_per_page = 15; 
$total = mysql_result(mysql_query("SELECT COUNT(*) FROM brand"), 0); 
$page_count = ceil($total / $records_per_page); 

$page = 1; 
if (isset($_GET['page']) && $_GET['page'] >= 1 && $_GET['page'] <= $page_count) { 
    $page = (int)$_GET['page']; 
} 
$skip = ($page - 1) * $records_per_page; 

$result = mysql_query("SELECT * FROM brand order by id desc LIMIT $skip, $records_per_page");
?>
<html>
	<head>
		<title>Brands</title>
		<link rel="stylesheet" type="text/css" href="../CSS/style.css" media="screen" />
	</head>
	<body>
		<div class="wrapper">
			<?php
				require_once '../library/header.php';
				require_once '../library/content.php';
			?>
			<div class="rightcontent">
				<center><h3>List of Brand</h3></center>
				<br/><a href="add_brand.php" class="link_td">Add</a><br/>
				<?php
				if(mysql_num_rows($result)>0)
				{
					?>
						<br/><table align="center" border="1" cellpadding="5px">
						 <tr><th>Name</th>
						 <th>Details</th>
						 <th>Status</th>
						 <th>Update</th></tr>
						
					<?php
					while($row=mysql_fetch_assoc($result))
					{
					?>
						<tr><td><?php echo $row['name'];?></td>
						<td><?php echo $row['details'];?></td>
						<td><?php echo $row['status'];?></td>
						<td><a href="brand.php?deletebrand=<?php echo $row['id'];?>" style="text-decoration:none;">delete</a>/
						<a href="brandupdate.php?edit=<?php echo $row['id'];?>" style="text-decoration:none;">edit</a></td></tr>
					<?php
					}
				}
				?>
				</table><br/>Result Page:
				<?php
				for ($i = 1; $i <= $page_count; ++$i)
					{
						echo '<a href="' . $_SERVER['PHP_SELF'] . '?page=' . $i . '" style="text-decoration:none;">'. $i . '</a> ';
					}
				?>
			</div>
		<div class="footer">
			<p>&copy; info@employee. All rights reserved.</p>
		</div>
		</div>
	</body>
</html>