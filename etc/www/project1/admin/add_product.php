<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("location:index.php?msg=Session Expired");
	exit;
}
require_once ('../library/sql.php');
$db=new DB();
$result=$db->query("select cid, name from category");
?>
<html>
	<head>
		<title>Products</title>
		<link rel="stylesheet" type="text/css" href="../CSS/style.css" media="screen" />
	</head>
	<body>
		<div class="wrapper">
			<?php
				require_once '../library/header.php';
				require_once '../library/content.php';
			?>
			<div class="rightcontent">
				<center><br>Add New Product</br><center>
				<?php echo isset($_GET['msg']) ? $_GET['msg'] : ''; ?>
				<form action="product_add.php" method="post" enctype="multipart/form-data" cellpadding="10px">
				<center><br/><br/>
				<br/><table align="center">
				<tr><th>Product Name:</th><th><input type="text" name="name"/></th></tr>
				<tr><th>Product Detail:</th><th><input type="text" name="detail"/></th></tr>
				<tr><th>Category:</th><th>
				<select name="category">
				<option value=""></option>
				<?php
				while($arrayRow = mysql_fetch_assoc($result))
					{
						$val=$arrayRow['cid'];
						$value = $arrayRow['name'];
						
						echo "<option selected ='selected' value='$val'>$value</option>\n";
					}
					?>
				</select></th></tr>
				<tr><th>Brand:</th><th>
				<select name="brand">
				<option value=""></option>
				<?php
				$value=$db->query("select name from brand");
				while($row=mysql_fetch_assoc($value)) 
				{
					$select=$row['name'];
					
					echo "<option selected ='selected' value='$select'>$select</option>\n";
				}
				?>
				</select></th></tr>
				<tr><th>Price:</th><th><input type="number" name="price" /></th></tr>
				<tr><th>Status</th><td><input <?php echo !empty($data['status']) ? ' checked=""' : ''; ?>type="radio" name="status" id="state_yes" value="Active"/>Active
					<input <?php echo !empty($data['status']) ? ' checked=""' : ''; ?>type="radio" name="status" id="state_no" value="Inactive"/>Inactive
					</td></tr>
				<tr><th>Featured?:</th>
				<td><input <?php echo !empty($data['feature']) ? ' checked=""' : ''; ?>type="radio" name="feature" id="state_yes" value="Yes"/>Yes
					<input <?php echo !empty($data['feature']) ? ' checked=""' : ''; ?>type="radio" name="feature" id="state_no" value="No"/>No
					</td></tr>
				<tr><th>Image:</th><th><input type="file" name="photo"/><input type="hidden" name="uploaded"></th></tr>
				<tr><th><input type="submit" value="SUBMIT"/></th></tr>
				</table></center></form>
			</div>
		<div class="footer">
			<p>&copy; info@employee. All rights reserved.</p>
		</div>
		</div>
	</body>
</html>