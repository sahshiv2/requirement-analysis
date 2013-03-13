<?php
	class DB
	{
		public $db;
		public function __construct()
		{
			$this -> db = mysql_connect ("localhost", "root", "hwb");
			mysql_select_db("emp_management");
		}
		public function query($sql)
		{
			$result = mysql_query($sql);
			if($result) return $result;
			else return false;
		}
	}
?>