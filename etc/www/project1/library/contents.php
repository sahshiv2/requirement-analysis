<?php
require_once('sql.php');
$db=new DB();
$bquery=$db->query("select id, name from brand");
$num=mysql_num_rows($bquery);
$cquery=$db->query("select cid, name from category");
$number=mysql_num_rows($cquery);
?>
<div class="leftcontent">
	<div id="navContainer">
		<ul>
		<li> <span><a href="index.php"> Home</a></span></li>
		<li>
		<span><a>Category</a></span>
		<ul>
		<?php
			if($number > 0)
			{
				while($category = mysql_fetch_assoc($cquery))
				{
					$cat = $category['name'];
					$catid = $category['cid'];
					echo "<li> <a href='categorysearch.php?category=$catid'>$cat</a></li>";
				}
			}
		?>
		</ul>
		</li>
		<li> 
		<span><a>Brands</a></span>
		<ul>
		<?php
			if($num > 0)
			{
				while($brand = mysql_fetch_assoc($bquery))
				{
					$bid = $brand['id'];
					$bnd = $brand['name'];
					echo "<li> <a href='brandsearch.php?brand=$bid'>$bnd</a></li>";
				}
			}
		?>
		</ul>
		</li>
		<li> 
		<span><a href="">About</a></span>
		<ul>
		<li> <a href="#">Us</a></li>
		<li> <a href="#">Products</a></li>
		</ul>
		</li>
		</ul>
	</div>
	<br/>
	<br/>
	<?php
		require_once('library/addrotator.php');
	?>
</div>
