<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("location:index.php");
	exit();
}
require_once ('../library/sql.php');
$db=new DB();
if(isset($_POST['update']))
{
	if($_POST['update']=="yes")
	{
		$id=$_POST['id'];
		$name=$_POST['name'];
		$detail=$_POST['detail'];
		$status=$_POST['status'];
		$sql="UPDATE category SET cname='$name', details='$detail', status='$status' WHERE category.cid=".$id;
		$value=$db->query($sql);
		header('location:category_list.php');
		exit();
	}
}
?>
<html>
	<head>
		<title>MYSTORE</title>
		<link rel="stylesheet" type="text/css" href="../CSS/style.css" media="screen" />
	</head>
	<body>
		<div class="wrapper">
			<?php
				require_once '../library/header.php';
				require_once '../library/content.php';
			?>
			<div class="rightcontent">
				<?php
					if(isset($_GET['edit']))
					{
						$id = mysql_real_escape_string($_GET['edit']);
						$result= $db->query("SELECT * FROM category WHERE cid=".$id);
						if(mysql_num_rows($result) == 1)
						{
							$data = mysql_fetch_array($result);
					?>
					<form method="POST" action="catupdate.php"  enctype="multipart/form-data" >
					<input type="hidden" name="id"  value="<?php echo $id;?>"/>
					<br/>
					<table align="center" cellpadding="10px">
					<tr>
					<td>Name:</td>
					<td><input type="text" name="name" value="<?php echo $data['cname']; ?>" /></td>
					</tr>
					<tr>
					<td>Detail:</td>
					<td><input type="text" name="detail" size=30 value="<?php echo $data['details']; ?>" /></td>
					</tr>
					<tr>
					<td>Status:</td>
					<td>
					<input<?php echo !empty($data['status']) ? ' checked=""' : ''; ?> type="radio" name="status" id="state_yes" value="Published" /> Published
					<input<?php echo empty($data['status']) ? ' checked=""' : ''; ?> type="radio" name="status" id="state_no" value="Not Published" /> Not Published
					</td></tr>
					<tr>
					<td>&nbsp;</td>
					<td align="right">
					<input type="hidden" name="id" value="<?php echo $id ?>" />
					<input type="hidden" name="update" value="yes" />
					<input type="submit" value="UPDATE"/>
					</td>
					</tr>
					</table>
					</form>
					<?php
				}
			}
		?>
			</div>
			<div class="footer">
				<p>&copy; info@mystore.com<br/> All rights reserved.</p>
			</div>
			</div>
	</body>
</html>