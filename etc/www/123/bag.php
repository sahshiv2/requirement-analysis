<?php
session_id();
session_start();
require_once('library/sql.php');
$db=new DB();
if(isset($_GET["remove"]))
{
	$id = $_GET["remove"];
	$result = mysql_query("DELETE FROM cart WHERE cart.cartid =".$id);
	if($result)
	{
		header("Location: bag.php");
		exit();
	}
}
// update cart
if($_SERVER['REQUEST_METHOD'] == 'POST' && $_GET['action'] == 'update'){
	$sid=session_id();
	$error = 0;
	$query=$db->query("select * FROM cart where ctid='$sid'");
	while($row=mysql_fetch_assoc($query)){
		$qty = $_POST['qty_' . $row['cartid']];
		if($qty > 0){
			$sql = "UPDATE cart SET quantity=$qty WHERE cartid=" . $row['cartid'];
			$result = mysql_query($sql);
			if(!$result){
				$error++;
			}
		}
		else{
			$sql = "DELETE FROM cart WHERE cartid=" . $row['cartid'];
			$result = mysql_query($sql);
		}
	}
	$msg = "";
	if($error > 0){
		$msg = "There was some errors while udpating cart.";
	}
	header("Location: bag.php?msg=$msg");
	die;
}
$sid=session_id();
$query=$db->query("select * FROM cart where ctid='$sid'");
$tot=0
?>
<html>
	<head>
		<title></title>
		<link rel="stylesheet" type="text/css" href="CSS/styles.css" media="screen" />
	</head>
	<body>
		<div class="wrapper">
			<?php
				require_once 'library/headers.php';
				require_once 'library/contents.php';
			?>
			<div class="rightcontent">
				<?php
				if(mysql_num_rows($query)>0)
				{
				?>
				<br/>
				<form name="quantity" method="POST" action="bag.php?action=update">		
				<table align='center' border="0" cellpadding="10px">
					 <tr><th>Image</th>
					 <th>Product Name</th>
					 <th>Quantity</th><th>price</th>
					 <th>Total</th><th>Update</th>
				 </tr>
				<?php
				while($row=mysql_fetch_assoc($query))
				{
					$total=$row['quantity']*$row['price'];
					$tot=$tot+$total;
					?>
					<tr>
					<td height="40" width="40">
					<img src="upload/<?php echo $row['image'];?>" width="50" height="50" style="border:1px solid"></img></td>
					<td><?php echo $row['productname'];?></td>
					
					
					<td>
						<input type="number" min="1" max="20" name="qty_<?php echo $row['cartid'];?>" value="<?php echo $row['quantity'];?>" size="5px">
					</td>
					<td><?php echo "Rs. ".$row['price'];?></td>
					<td><?php echo "Rs. ".$total;?></td>
					<td><a href="bag.php?remove=<?php echo $row['cartid'];?>" style="text-decoration:none;">Remove</a></td></tr>
					<?php
				}
				?>
				<tr>
					<td colspan="7"><input type="submit" name="btnupdate" value="Update Cart" /></td>
				</tr>
				</table>
				</form>
				<center>
				<br><a href="index.php" class="link_td" style="text-decoration:none; padding:10px;">Continue Shopping</a></br></br></br></br></br></br>
				<a href="checkingout.php" class="link_td" style="text-decoration:none; padding:10px;">Place Order</a></center>
				<?php
				}
				else
				{
					echo ("<center>cart is empty</center>");
				?>
					<br/><center><a href="index.php" class="link_td" style="text-decoration:none; padding:10px;">Continue Shopping</a></center>
				<?php
				}
				?>
				
				
				
			</div>
			<div class="footer">
				<p>.</p>
			</div>
			</div>
	</body>
</html>