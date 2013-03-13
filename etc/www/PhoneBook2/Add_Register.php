   <?php
	   $connect=mysql_connect ("localhost", "root", "hwb");
      			 mysql_select_db ("phonebook"); 
				  
				$username=$_POST['username'];
				$password=$_POST['password'];
			    $sqlQuery="insert into members  (username, password) values('$username', '$password' )" ;
				 $result=mysql_query($sqlQuery);  
                  
				  include('index.php');
                  
           ?>