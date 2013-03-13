<?php
require_once ('library/sql.php');
$db=new DB();
$query=$db->query("select * FROM products");
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
				<center>Featured Products</center>
				<?php
				define('COLS', 4);
				$col = 0;
				if(mysql_num_rows($query)>0)
				{
				?>
				<table  cellpadding="20px">
				<tr>
				<?php
					while($row=mysql_fetch_assoc($query))
					{
						if($row['feature']=="Yes")
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
							<td><a href="viewdetail.php?detail=<?php echo $row['pid'];?>"><img src="upload/<?php echo $row['image'];?>" height="150" width="160"/></a><br/>
								<?php echo $row['name'];?><br/>Rs.<?php echo $row['price'];?><br/><a href="addcart.php?pid=<?php echo $row['pid'];?>" style="text-decoration:none;">Add To cart</a></td>
						<?php
						}
						}
					}
				}
				?>
				</tr>
				</table>	
			</div>
			<div class="footer">
				<p>copyright content </p>
			</div>
			</div>
	</body>
</html>