<?php 

class Mysql
{
	private $koneksi;
	private $host;
	private $user;
	private $password;
	private $database;

	private $query;
	private $query_select;
	private $query_result;

	private $row;
	private $numrow;

	function __construct($host, $user, $password, $database)
	{
		$this->host = $host;
		$this->user = $user;
		$this->password = $password;
		$this->database = $database;
	}

	function connect()
	{
		$this->koneksi = mysqli_connect($this->host,$this->user,$this->password);
		mysqli_select_db($this->koneksi, $this->database);
	}

	function query($query)
	{
		$this->query_select = $query;
		$this->query_result = mysqli_query($this->koneksi, $this->query_select);
	}

	function get_array_query()
	{
		if($this->row = mysqli_fetch_array($this->query_result))
			return $this->row;
		else
			return false;
	}

	function get_num_query()
	{
		$this->numrow = mysqli_num_rows($this->query_result);
		return $this->numrow; 
	}
}
?>
