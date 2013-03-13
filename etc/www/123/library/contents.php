<?php
require_once('library/sql.php');
$db=new DB();
$catquery=$db->query("SELECT  name FROM category ORDER BY name ASC");
$brandquery=$db->query("SELECT  name FROM brand ORDER BY name ASC");
?>
<div class="leftcontent">
	<a href="index.php" style="text-decoration: none"><div id="button2">HOME
					</div></a>
					<div id="button2">CATEGORIES
					</div>
					 <?php
					 for($i=0; $i < mysql_num_rows($catquery); $i++)
					 {
					 $item=mysql_fetch_assoc($catquery);
					 
					$name=$item['name'];
					 ?>
					  <a href="categorysearch.php?category=<?php echo $name;?>" style="text-decoration: none" value="$name"><div id="button3"><?php echo $name;?>
					</div></a>
					<?php
					 }
					 ?>
					 <div id="button2">BRANDS
					</div>
					<?php
					 for($i=0; $i < mysql_num_rows($brandquery); $i++)
					 {
					 $item=mysql_fetch_assoc($brandquery);
					 
					$name=$item['name'];
					 ?>
					  <a href="brandsearch.php?brand=<?php echo $name;?>" style="text-decoration: none" value="$name"><div id="button3"><?php echo $name;?>
					</div></a>
					<?php
					 }
					 ?>
	<a href="" style="text-decoration: none" align="center"  ><div id="imageipod" ></div></a>
	

	
	

	
	
</div>
