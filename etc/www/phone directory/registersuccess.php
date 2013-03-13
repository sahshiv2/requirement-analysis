<?php
	include ('includes/sql.php');
	$db=new DB();
	
	//$connect=mysql_connect("localhost", "root", "anjana");
	//mysql_select_db("phonebook");
	$u=$_POST['username'];
	$p=$_POST['password'];
	$rp=$_POST['repassword'];
	//while($u==$rp)
	//{
		//if(!($u=="" && $p==""))
		//{
			$query="insert into users(username, password) values('$u', '$p')" ;
			$result=mysql_query($query);  
			include('index.php');
		//}
	//}
	
?>
