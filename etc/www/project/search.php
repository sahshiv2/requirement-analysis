<?php
session_start();
$category=$_POST['category'];
$name=$_POST['select'];
require_once ('library/sql.php');
$db=new DB();
if($category == 'All Category')
{
	$query=$db->query("SELECT * FROM products WHERE pname LIKE '%$name%'");
}
else 
{
	$query=$db->query("SELECT * FROM products WHERE pname LIKE '%$name%' and category LIKE '$category'");
}
?>
<html>
	<head>
		<title>MYSTORE</title>
		<link rel="stylesheet" type="text/css" href="CSS/style1.css" media="screen" />
		<script type="text/javascript" src="JS/script.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<?php
				require_once 'library/headers.php';
				require_once 'library/contents.php';
			?>
			<div class="rightcontent">
				<?php
				define('COLS', 5);
				$col = 0;
				if(mysql_num_rows($query)>0)
				{
				?>
				<br/><table  cellpadding="15px">
				<tr>
				<?php
					while($row=mysql_fetch_assoc($query))
					{
							$col++;
							if ($col > COLS)
							{ 
								$col = 0;
								echo '</tr><tr>'; 
							}
							else
							{
						?>
							<td><a href="viewdetail.php?detail=<?php echo $row['pid'];?>">
							<img src="upload/<?php echo $row['image'];?>" height="140" width="145"/></a><br/>
								<center><?php echo $row['pname'];?><br/>
								Rs.<?php echo $row['price'];?><br/>
								<a href="addcart.php?pid=<?php echo $row['pid'];?>" style="text-decoration:none;">Add To cart</a></center></td>
						<?php
						}
					}
				}
				else
				{
					echo "<br/><br/><center>This Product is not available at the moment.Thank You for shopping with us. For more Shopping experience</center>";
				?>
				<br/><center><a href="index.php" class="link_td" style="text-decoration:none; padding:10px;">Click Here</a></center>
				<?php
				}
				?>
				</tr>
				</table>	
			</div>
			<div class="footer">
				<p>&copy; info@mystore.com<br/> All rights reserved.</p>
			</div>
			</div>
	</body>
</html>