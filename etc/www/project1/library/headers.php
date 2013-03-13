<?php
require_once ('library/sql.php');
$db=new DB();
$result=$db->query("select cid, name from category");
 ?> 
<div id="header">
<div class="logo">
	<a href="index.php"><img src="IMAGES/logo.jpg" height="150px" width="150px"/></a>
</div>
	<div class="banner">	
		<div class="bannerup">
			<a href="signin.php" style="text-decoration: none"><div class="menubutton" cellpadding="10px">Sign In</div></a>
			<a href="register.php" style="text-decoration: none"><div class="menubutton" cellpadding="10px">Register</div></a>
			
			<center><h2>MYSTORE</center></h2>
		</div>
		<div class="bannerdown">
		
			<div id="menu1">
			<ul>
			<li><form method="post" action="search.php" name="search" accept-charset="utf-8"></li>
			<li><input name="select" type="text" value="search product" onBlur="getproduct()" onfocus="clearproduct()"></li>
			<li><select name="category"><option value="All Category">All Category</option></li>
			<?php
			while($arrayRow = mysql_fetch_assoc($result))
			{	
				$id=$arrayRow['cid'];
				$value = $arrayRow['name'];
				
				echo "<option value='$id'>$value</option>\n";
			}
			?>
			</select></th></tr>
			<li><input type="submit" value="SEARCH">
			</form></li>
			<li><a href="bag.php">Shopping Bag</a></li>
			<li><a href="checkout.php?step=1">Checkout</a></li>
			<li><a href="account.php">Account</a></li>
			</ul>
			</div>
		</div>
	</div>
</div>