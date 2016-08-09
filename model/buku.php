<?php
include("../databasequery/dataaccess.php");

class Buku
{
	private $books;

	function __construct()
	{
		$this->da = new DataAccess();
	}

		function book_list()
		{
			$this->da->book_list();
		}

		function book_detail($id)
		{
			$this->da->book_detail($id);
		}

	function get_booksp()
	{
		if($this->books = $this->da->get_row())
			return $this->books;
		else
			return false;
	}
}
?>
