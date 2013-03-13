<?php

require_once ('library/sql.php');
$db=new DB();
$result=$db->query("select  name from category");
 ?> 

<div id="header">

	<div class="logo">
		<MARQUEE behavior="scroll" direction="up"width="180px" ><a href="index.php"><img src="IMAGES/logo.jpeg" height="150px" width="180px"></a></MARQUEE>

				
		</div>
		<div class="banner">	
			<div class="bannerup">
			<?php
		if(isset($_SESSION['user']))
		{
		?>
			<a href="logout.php" style="text-decoration: none"><div id="button" cellpadding="10px">Sign Out</div></a>
		<?php
		}
		else
		{
		?>
			<a href="signin.php" style="text-decoration: none"><div id="button" cellpadding="10px">Sign In</div></a>
			<a href="register.php" style="text-decoration: none"><div id="button" cellpadding="10px">Register</div></a>
		<?php
			}
			?>
			<center><h2><FONT COLOR="PINK">WELCOME TO MUSICAL STORE</FONT></center></h2>
			<?php
			if(isset($_SESSION['user']))
			{
				echo "<h4><center>Welcome " . $_SESSION['user'] . "</center></h4>";
			}
			?>
			
			
			

				
				
			</div>
			<div class="bannerdown" align="left">
		
			<a href="checkingout.php" style="text-decoration: none" align="center"  ><div id="button" >checkout</div></a>  
				<a href="cart.php" style="text-decoration: none" align="center"  ><div id="button" >CART</div></a> 
				
			   <form method="post" action="search.php" name="search" accept-charset="utf-8"></li>
			  
			   <select name="category"><option value="All Category">All Category</option>
			    <?php
			   while($arrayRow = mysql_fetch_assoc($result))
			  {	
				
				$value = $arrayRow['name'];
				
				echo "<option value='$value'>$value</option>\n";
			 }
			  ?>
			  </select></th></tr>
			  <input type="submit" value="SEARCH">
			  </form>
			
			 
			
			
				
			
			
			
			</div>
		</div>
</div>
