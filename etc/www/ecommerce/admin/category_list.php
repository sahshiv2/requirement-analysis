<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("location:index.php");
}
require_once ('../library/sql.php');
$db=new DB();
if(isset($_GET["deletecategory"]))
{
	$id = $_GET["deletecategory"];
	$value = mysql_query("DELETE FROM category WHERE category.cid =".$id);
	if($value)
	{
		$msg = "Deleted successfully";
	}
	else
	{
		$msg = "Error on deleting";
		header("Location: category_list.php?msg=$msg");
		exit;
	}
}
$records_per_page = 15; 
$total = mysql_result(mysql_query("SELECT COUNT(*) FROM category"), 0); 
$page_count = ceil($total / $records_per_page); 
$page = 1; 
if (isset($_GET['page']) && $_GET['page'] >= 1 && $_GET['page'] <= $page_count) { 
    $page = (int)$_GET['page']; 
} 
$skip = ($page - 1) * $records_per_page; 
$result = mysql_query("SELECT * FROM category LIMIT $skip, $records_per_page");
?>
<html>
	<head>
		<title>category</title>
		<link rel="stylesheet" type="text/css" href="../CSS/style.css" media="screen" />
	</head>
	<body>
		<div class="wrapper">
			<?php
				require_once '../library/header.php';
				require_once '../library/content.php';
			?>
			<div class="rightcontent">
             <center> <p><b><u>List of Categories</u></b></p></center>
				<?php
				if(mysql_num_rows($result)>0)
				{
					?>
						<br/><table align="center" border="1">
						 <tr><th>Name</th>
						 <th>Details</th>	
						 <th>Status</th></tr>
					<?php
					while($row=mysql_fetch_assoc($result))
					{
					?>
						<tr><td><?php echo $row['name'];?></td>
						<td><?php echo $row['details'];?></td>
						<td><?php echo $row['status'];?></td>
						<td><a href="category_list.php?deletecategory=<?php echo $row['cid'];?>" style="text-decoration:none;">delete</a></td>
						<td><a href="catupdate.php?edit=<?php echo $row['cid'];?>" style="text-decoration:none;">edit</a></td></tr>
					<?php
					}
				}
				?>
				</table>
				<center><br/><a href="add_category.php" class="link_td">Insert a category</a><br/></center>
				<?php
				for ($i = 1; $i <= $page_count; ++$i)
					{
						echo '<a href="' . $_SERVER['PHP_SELF'] . '?page=' . $i . '">'. $i . '</a> ';
					}
				?>
			</div>
			<div class="footer">
				<p>copyright content</p>
			</div>
		</div>
	</body>
</html>