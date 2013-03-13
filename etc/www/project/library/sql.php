<?php
class DB
{
	public $db;
	public function __construct()
	{
		$this->db = mysql_connect ("localhost", "root", "hwb");
		mysql_select_db("ecommerce");
	}
	public function query($sql)
	{
		$result = mysql_query($sql) or die(mysql_error());
		if($result) return $result;
		else return false;
	}
	public function removeimage($image)
	{
		$path="../upload/".$image;
		if(file_exists($path))
		{
			unlink($path);
		}
    }  
}
?>