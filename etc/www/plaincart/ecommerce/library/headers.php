<?php

require_once ('library/sql.php');
$db=new DB();
$result=$db->query("select cid, name from category");
 ?> 

<div id="header">

	<div class="logo">
		<MARQUEE behavior="scroll" direction="up"width="180px" ><img src="IMAGES/logo.jpeg" height="150px" width="180px"></MARQUEE>

				
		</div>
		<div class="banner">	
			<div class="bannerup">
			<marquee><h2><font color="pink"><FONT SIZE="50PX">WELCOME TO MUSICAL  STORE</font></h2></marquee>
				<a href="checkout.php?step=1" style="text-decoration: none" align="center"  ><div id="button" >checkout</div></a> 
				<a href="register.php" style="text-decoration: none" align="center"  ><div id="button" >Register</div></a> 
				<a href="signin.php" style="text-decoration: none" align="center"  ><div id="button" >Sign In</div></a> 
				<a href="bag.php" style="text-decoration: none" align="center"  ><div id="button" >CART</div></a> 
				
			</div>
			<div class="bannerdown" align="left">
		
			
			   <form method="post" action="search.php" name="search" accept-charset="utf-8"></li>
			  
			   <select name="category"><option value="All Category">All Category</option>
			    <?php
			   while($arrayRow = mysql_fetch_assoc($result))
			  {	
				$id=$arrayRow['cid'];
				$value = $arrayRow['name'];
				
				echo "<option value='$id'>$value</option>\n";
			 }
			  ?>
			  </select></th></tr>
			  <input type="submit" value="SEARCH">
			  </form>
			
			 
			
			
				
			
			
			
			</div>
		</div>
</div>
