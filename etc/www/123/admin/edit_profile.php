<?php
session_start();
if(!isset($_SESSION['login']))
{
	header("location:index.php");
	exit();
}
$id=$_SESSION['login'];
$username=$_SESSION['username'];
require_once ('../library/sql.php');
$db=new DB();
if(isset($_POST['update']))
{
	if($_POST['update']=="yes")
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$gender=$_POST['gender'];
		$age=$_POST['age'];
		$address=$_POST['address'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$detail=$_POST['detail'];
		
		$sql="UPDATE admin SET firstname='$fname', lastname='$lname', gender='$gender', age='$age', 
				address='$address', phone='$phone', email='$email', detail='$detail' WHERE id=".$id;
		$value=$db->query($sql);
		header('location:main.php?msg=profile updated');
		exit();
	}
}
$result=$db->query("select * FROM admin WHERE id=$id");
?>
<html>
	<head>
		<title>main</title>
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
						if(mysql_num_rows($result) == 1)
						{
							$data = mysql_fetch_array($result);
			?>
				<form action='edit_profile.php' method='post'>
				<center><br/><br/>
				<br/><br/><table align='center' >
				<tr><th>First Name:</th><th><input type='text' name='fname' value="<?php echo $data['firstname']; ?>"/></th></tr>
				<tr><th>Last Name:</th><th><input type='text' name='lname' value="<?php echo $data['lastname']; ?>"/></th></tr>
				<tr><th>Gender:</td><td><input<?php echo !empty($data['gender']) ? ' checked=""' : ''; ?> type="radio" name="gender" id="state_yes" value="Male" /> Male
						<input<?php echo empty($data['gender']) ? ' checked=""' : ''; ?> type="radio" name="gender" id="state_no" value="Female" /> Female
						</th></tr>
				<tr><th>Age:</th><th><input type='number' name='age' value="<?php echo $data['age']; ?>"/></th></tr>
				<tr><th>Address:</th><th><input type='text' name='address' value="<?php echo $data['address']; ?>"/></th></tr>
				<tr><th>Phone:</th><th><input type='number' name='phone' value="<?php echo $data['phone']; ?>"/></th></tr>
				<tr><th>Email:</th><th><input type='text' name='email' value="<?php echo $data['email']; ?>"/></th></tr>
				<tr><th>Detail:</th><th><input type='text' name='detail' value="<?php echo $data['detail']; ?>"/></th></tr>
				<tr>
					<td>&nbsp;</td>
					<td align="right">
					<input type="hidden" name="id" value="<?php echo $id ?>" />
					<input type="hidden" name="update" value="yes" />
				<tr><th><input type='submit' value='UPDATE'/></th></tr>
				</table></center>
				<?php
				}
			}
			?>
			</div>
			<div class="footer">
				<p>copycontent.</p>
			</div>
		</div>
	</body>
</html>
	