<?php
include("../model/buku.php");
include("../view/catalogview.php");

class TokoBuku
{
	private $buku;
	private $id;

	function __construct()
	{
		$this->bukug = new Buku();
		$this->view = new CatalogView($this->bukug);

		switch ($_GET['view']) 
		{
			case 'book':
				$this->detailbuku();
				break;
			
			default:
				$this->listbuku();
				break;
		}
	}

	function detailbuku()
	{
		$this->bukug->book_detail($_GET['id']);
		$this->view->view_detail();
	}

	function listbuku()
	{
		$this->bukug->book_list();
		$this->view->view_list();
	}
}

$tb = new TokoBuku();
?>
