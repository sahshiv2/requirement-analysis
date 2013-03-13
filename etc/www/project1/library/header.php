<?php
 ?> 
<div id="header">
	<div class="logo">
			<img src="../IMAGES/logo.jpg" height="170px" width="150px">
		</div>
		<div class="banner">	
			<div class="bannerup">
				<center>MY FASHION STORE</center>
				<?php
					echo "<center>Welcome " . $_SESSION['username'] . "</center>";
				?>
			</div>
			<div class="bannerdown">
				<div class="menu">
				<ul>
				<ul id="nav">
					<li><a href="logout.php">Signout</a></li>
					<li><a href="#">profile</a>
					<ul>
						<li><a href="edit_password.php">Change Password</a></li>
						<li><a href="edit_profile.php?edit">Update Profile</a></li>
					</ul>
					</li>
					<li>
						<a href="#">About</a>
						<ul>
							<li><a href="#">Us</a></li>
							<li><a href="#">Services</a></li>
						</ul>
					</li>
					<li><a href="main.php">Home</a></li>
				</ul>
				</ul>
				</div>
			</div>
		</div>
</div>
