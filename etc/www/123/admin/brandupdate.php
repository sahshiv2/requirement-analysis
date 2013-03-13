<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("location:index.php");
	exit();
}
require_once ('../library/sql.php');
$db=new DB();
if(isset($_POST["update"]))
{
	if($_POST["update"]=="yes")
	{
		$id=$_POST['id'];
		$name=$_POST['name'];
		$detail=$_POST['detail'];
		
		$sql="UPDATE brand SET name='$name', details='$detail'  WHERE id=".$id;
		$value=$db->query($sql);
		header('location:brand.php');
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
						$result= $db->query("SELECT * FROM brand WHERE id=".$id);
						if(mysql_num_rows($result) == 1)
						{
							$data = mysql_fetch_array($result);
					?>
					<form method="POST" action="brandupdate.php"  enctype="multipart/form-data">
					<input type="hidden" name="id"  value="<?php echo $id;?>"/>
					<br/>
					<table align="center" cellpadding="10px">
					<tr>
					<td>Name:</td>
					<td><input type="text" name="name" value="<?php echo $data['name']; ?>" /></td>
					</tr>
					<tr>
					<td>Detail:</td>
					<td><input type="text" name="detail" size=30 value="<?php echo $data['details']; ?>" /></td>
					</tr>
					
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