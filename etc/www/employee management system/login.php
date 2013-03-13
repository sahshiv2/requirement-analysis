<?php
session_start();
   
	include('sql.php');
	$db=new DB();
   $username = $_POST['username'];
   $password = $_POST['password'];

   // check if the user id and password combination exist in database
   $sql = "SELECT username FROM user WHERE username = '$username' AND password = '$password'";

   $result = mysql_query($sql) or die(mysql_error());

   if (mysql_num_rows($result) > 0) 
   {
      // the user id and password match,
      // set the session
      $_SESSION['login'] = true;
	 
	//session_register('login');
      // after login we move to the main page
      header("location:mainpage.php");
      exit;
   } 
   else
   {
      //echo "Sorry, wrong user id / password";
	 header("location:index.php ?msg wrong login info");
    }


	
	
	
?>