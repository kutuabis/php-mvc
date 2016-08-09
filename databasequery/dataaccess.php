<?php 
include("../classquery/mysql.php");

class DataAccess
{
	private $db; // koneksi
	private $host = "localhost";
	private $user = "root";
	private $password = "123";
	private $database = "catalog";

	private $myquery;
	private $id;
	private $row;

	function book_list()
	{
		$this->myquery = "select * from catalog";
		$this->data_access();
	}

	function book_detail($id)
	{
		$this->id = $id;
		$this->myquery = "select * from catalog where bookid=$this->id"; 
		$this->data_access();
	}

	private function data_access()
	{
		$this->db = new Mysql($this->host, $this->user, $this->password, $this->database);
		$this->db->connect();
		$this->db->query($this->myquery);
	}

	function get_row()
	{
		if($this->row = $this->db->get_array_query())
			return $this->row;
		else
			return false;
	}
}


?>
