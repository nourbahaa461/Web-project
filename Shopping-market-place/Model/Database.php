<?php
class Database
{
	private $host = "localhost";
	private $username = "root";
	private $password = "";
	private $DBname = "work";
	private $connection = null;
    private static $instance; 
	//public  static $counter=0;
	
	private function __construct() //define el connection parameters aw el connection informateion
	{
		$this->connection = new mysqli($this->host,$this->username,$this->password,$this->DBname);
		mysqli_set_charset($this->connection,"utf8");
		//self::$counter++;
	}
	
	public function get_latest_inserted_id() //btgeeb a5er id zad 3la el db table
	{
		return mysqli_insert_id($connection);
	}
	
	public static function get_instance() //establoish connection m3 el db
	{
		if(self::$instance==null)
		{
			self::$instance=new Database(); 
		}
		return self::$instance;
	}
	
	function execute($sql) //ecxecute sql stmt
	{
		try 
		{
			return mysqli_query($this->connection,$sql);
		}catch (Exception $e) {}
	}
}

?>
