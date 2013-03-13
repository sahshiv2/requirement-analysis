<?php
	   $connect=mysql_connect ("localhost", "root", "hwb");
      			 mysql_select_db ("employee_management"); 
				  
				$username=$_POST['username'];
				$password=$_POST['password'];
			    $sqlquery="insert into user  (username, password) values('$username' ,'$password' )" ;
				$result=mysql_query($sqlquery);  
                include('index.php');
?>