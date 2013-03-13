<?php
$category=$_POST['category'];
require_once ('library/sql.php');
$db=new DB();
$query=$db->query("select * FROM products where category like '$category'");
?>
<html>
	<head>
		<title>MYSTORE</title>
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
								Rs.<?php echo $row['price'];?><br/>
								<a href="addcart.php?pid=<?php echo $row['pid'];?>" style="text-decoration:none;">Add To cart</a></td>
						<?php
						}
					}
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