<?php
session_start();
if(!isset($_SESSION['signin']))
{
	header('Location:signin.php');
	exit();
}
$user=$_SESSION['user'];
require_once('library/sql.php');
$db=new DB();
if(isset($_POST['update']))
{
	if($_POST['update']=="yes")
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$country=$_POST['country'];
		$city=$_POST['city'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		
		$sql="UPDATE customer SET FirstName='$fname', LastName='$lname', Country='$country', City='$city',
			 phone='$phone', email='$email' WHERE email='$user'";
		$value=$db->query($sql);
		header('location:account.php?msg=account updated');
		exit();
	}
}
$query=$db->query("select * from customer where Email='$user'");
?>
<html>
	<head>
		<title>MYSTORE</title>
		<link rel="stylesheet" type="text/css" href="CSS/style1.css" media="screen" />
	</head>
	<body>
		<div class="wrapper">
			<?php
				require_once 'library/headers.php';
				require_once 'library/contents.php';
			?>
			<div class="rightcontent">
				<center><h3>WELCOME TO YOUR ACCOUNT</h3></center>
				<?php
				
						if(mysql_num_rows($query)>0)
						{
							$data = mysql_fetch_array($query);
			?>
				<form action='updateprofile.php' method='post'>
				<center><br/><br/>
				<br/><br/><table align='center' >
				<tr><th>First Name:</th><th><input type='text' name='fname' value="<?php echo $data['FirstName']; ?>"/></th></tr>
				<tr><th>Last Name:</th><th><input type='text' name='lname' value="<?php echo $data['LastName']; ?>"/></th></tr>
				<tr><th>Country:</th><th><input type='text' name='country' value="<?php echo $data['Country']; ?>"/></th></tr>
				<tr><th>City:</th><th><input type='text' name='city' value="<?php echo $data['City']; ?>"/></th></tr>
				<tr><th>Email:</th><th><input type='text' name='email' value="<?php echo $data['Email']; ?>"/></th></tr>
				<tr><th>Phone:</th><th><input type='number' name='phone' value="<?php echo $data['phone']; ?>"/></th></tr>
				<tr>
					<td>&nbsp;</td>
					<td align="right">
					<input type="hidden" name="id" value="<?php echo $id ?>" />
					<input type="hidden" name="update" value="yes" />
				<tr><th><input type='submit' value='UPDATE'/></th></tr>
				</table></center>
				<?php
				}
			
			?>
			</div>
			<div class="footer">
				<p>&copy; info@mystore.com<br/> All rights reserved.</p>
			</div>
			</div>
	</body>
</html>