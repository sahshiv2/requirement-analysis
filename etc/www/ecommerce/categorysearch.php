<?php
$category=$_GET['category'];
require_once ('library/sql.php');
$db=new DB();
$query=$db->query("select * FROM products where category LIKE '$category'");
?>
<html>
	<head>
		<title>MYSTORE</title>
		<link rel="stylesheet" type="text/css" href="CSS/styles.css" media="screen" />
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
								Rs.<?php echo $row['price'];?><br/>
								<a href="addcart.php?pid=<?php echo $row['pid'];?>" style="text-decoration:none;">Add To cart</a></td>
						<?php
						}
					}
				}
				else 
				{
					echo "<center><b>product with this category are not available right now.</b></center>";
				}
				?>
				</tr>
				</table>	
			</div>
			<div class="footer">
				<p>copyright content</p>
			</div>
			</div>
	</body>
</html>