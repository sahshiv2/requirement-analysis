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
		$category=$_POST['category'];
		$brand=$_POST['brand'];
		$status=$_POST['status'];
		$feature=$_POST['feature'];
		$price=$_POST['price'];
		if(is_uploaded_file($_FILES['photo']['tmp_name'])){
			// find existing image name
			$query = $db->query("SELECT image FROM products WHERE pid=$id");
			$image_data = mysql_fetch_assoc($query);
			// delete existing file
			if(file_exists("../upload/".$image_data['image'])){
				unlink("../upload/".$image_data['image']);
			}
			$file=$_FILES['photo']['name'];
			$ext=explode(".",$file);
			$extension=end($ext);
			$filename=time().".".$extension;
			$target = "../upload/".$filename;
			
			move_uploaded_file($_FILES['photo']['tmp_name'], $target);
			
			$strquery = "image='$filename'";
		}
		else{
			$strquery = "";
		}
		$sql="UPDATE products SET name='$name', detail='$detail', category='$category', brand='$brand', 
				status='$status', feature='$feature', price='$price', $strquery WHERE pid=".$id;
		$value=$db->query($sql);
		header('location:product_list.php');
		exit();
	}
}

$cresult=$db->query("select name from category");
$bresult=$db->query("select name from brand");
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
						$result= $db->query("SELECT * FROM products WHERE pid=$id");
						if(mysql_num_rows($result) == 1)
						{
							$data = mysql_fetch_array($result);
					?>
					<form method="POST" action="prdupdate.php"  enctype="multipart/form-data" accept-charset="UTF-8">
					<input type="hidden" name="id"  value="<?php echo $id;?>"/>
					<br/>
					<table align="center" cellpadding="10px">
					<tr><td height="40" width="40">
					<img src="../upload/<?php echo $data['image'];?>" width="100" height="100" style="border:1px solid"></img></td>
					<td><input type="file" name="photo" id="file" value="<?php echo $data['image'];?>"/></td>
					</tr>
					<tr>
					<td>Name:</td>
					<td><input type="text" name="name" value="<?php echo $data['name']; ?>" /></td>
					</tr>
					<tr>
					<td>Detail:</td>
					<td><input type="text" name="detail" value="<?php echo $data['detail']; ?>" /></td>
					</tr>
					<tr><td>Category:</td>
				<td><select name="category">
				<option value="<?php echo $data['category']; ?>"></option>
				<?php
				while($arrayRow = mysql_fetch_assoc($cresult)) {
						$cat = $arrayRow['name'];
						
						echo "<option selected ='selected' value='$cat'>$cat</option>\n";
					}
					?>
				</select></td></tr>
					<tr><td>Brand:</td>
				<td><select name="brand">
				<option value="<?php echo $data['cbrand']; ?>"></option>
				<?php
				while($arrRow = mysql_fetch_assoc($bresult)) {
						$bnd = $arrRow['name'];
						
						echo "<option selected ='selected' value='$bnd'>$bnd</option>\n";
					}
					?>
				</select></td></tr>
					<td>Price:</td>
					<td><input type="text" name="price" value="<?php echo $data['price']; ?>" /></td>
					</tr>
					<tr>
					<td>Status:</td>
					<td>
					<input<?php echo !empty($data['status']) ? ' checked=""' : ''; ?> type="radio" name="status" id="state_yes" value="Active" />Active
					<input<?php echo empty($data['status']) ? ' checked=""' : ''; ?> type="radio" name="status" id="state_no" value="Inactive" />Inactive
					</td></tr>
					<tr>
					<td>Featured?</td>
					<td>
					<input<?php echo !empty($data['feature']) ? ' checked=""' : ''; ?> type="radio" name="feature" id="state_yes" value="Yes" />Yes
					<input<?php echo empty($data['feature']) ? ' checked=""' : ''; ?> type="radio" name="feature" id="state_no" value="No"/>No
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
				<p>&copy content</p>
			</div>
			</div>
	</body>
</html>