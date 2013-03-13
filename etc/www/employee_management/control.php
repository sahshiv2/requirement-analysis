<?php
if(isset($_SESSION))
{

	echo "<br>	<h2> Control panel :</h2>";
	echo "<table border=1>
			<form action='add_contact.php' method='post'>
				<input type='submit' value='Add contact'  />
			</form>
			<form action='show_contacts.php' method='post'>
				<input type='submit' value='Show contacts'  />
			</form>
			<form action='Search_contact.php' method='post'>
				<input type='submit' value='Search contacts'  />
			</form>
			<form action='Remove_contact.php' method='post'>
				<input type='submit' value='Remove contact'  />
			</form>   
			<form action='logout.php' method='post'>
				<input type='submit' value='logout'/>
			</form>  
		</table>";
	
				 
				 
}				 
?>
