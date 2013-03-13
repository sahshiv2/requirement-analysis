<?php
session_start();
require_once ('library/sql.php');
$db=new DB();
$query=$db->query("select products.pid, products.name, products.image, products.price FROM products where feature='yes'");
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
				<fieldset style="width:880; color:blue;">
				<legend><h3>Featured Products</h3></legend>
				<table  cellpadding="15px">
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
								<center><?php echo $row['name'];?><br/>Rs.<?php echo $row['price'];?><br/>
								<a href="addcart.php?pid=<?php echo $row['pid'];?>" style="text-decoration:none;">Add To cart</a></center></td>
						<?php
						}
					}
				}
				else 
				{
					echo ("<center>no products are available at the moment</center>");
				}
				?>
				</tr>
				</table>
				</fieldset>
			</div>
			<div class="footer">
				<p>&copy; info@mystore.com<br/> All rights reserved.</p>
			</div>
			</div>
	</body>
</html>