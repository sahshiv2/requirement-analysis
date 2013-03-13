<?php
session_id();
session_start();
$id=session_id();
require_once 'library/sql.php';
$db=new DB();
$quantity=$_POST['unit'];
$cat=$db->query("update cart set quantity='$quantity' where ctid='$id'");
header('Location:bag.php');
exit();
?>
