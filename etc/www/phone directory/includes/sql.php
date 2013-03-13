<?
	class DB
	{
		public $db;
		public __construct()
		{
			$this->db=mysql_connect("localhost", "root", "anjana");
			mysql_select_db("phonebook");
		}
		public function query($sql)
		{
			$result = mysql_query($sql);
			if($result) return $result;
			else return false;
		}
	}
?>