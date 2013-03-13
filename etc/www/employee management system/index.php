<?php
session_start();
if(isset($_SESSION['login']))
{
	header("location: mainpage.php");
	exit;
}
?>



<html>
<head>
<title> Welcome to login page</title>

<body>
<center>
<h1>welcome to first page</h1>
</center>

<br>
<br>
<br>
<center>
<FORM METHOD="POST" ACTION="login.php">
<TABLE BORDER="1" >
  <TR>
    <TD>username</TD>
    <TD>
      <INPUT TYPE="TEXT" NAME="username" SIZE="25">
    </TD>
  </TR>
  <TR>
    <TD>password</TD>
    <TD><INPUT TYPE="TEXT" NAME="password" SIZE="25"></TD>
  </TR>
<tr>
<td>
<INPUT TYPE="SUBMIT" VALUE="Submit" NAME="B1"></td>
</tr>
</TABLE>
</FORM>


</body>
</html>