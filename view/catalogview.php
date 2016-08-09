<?php
class CatalogView
{
	function __construct($buku)
	{
		$this->buku = $buku;
	}

	function view_detail()
	{
		$this->header();
		$this->link();
		echo "<table border=1>";
			echo "<tr>";
				echo "<th>Book title</th>";
				echo "<th>ISBN</th>";
				echo "<th>Price</th>";
				echo "<th>Author</th>";
				echo "<th>Publisher</th>";
				echo "<th>Year</th>";
			echo "</tr>";

		while($rows=$this->buku->get_booksp())
		{
			echo "<tr>";
				echo "<td>$rows[booktitle]</td>";
				echo "<td>$rows[bookisbn]</td>";
				echo "<td>$rows[bookprice]</td>";
				echo "<td>$rows[bookauthor]</td>";
				echo "<td>$rows[bookpublisher]</td>";
				echo "<td>$rows[bookyear]</td>";
			echo "</tr>";
		}

		echo "</table>";
	}

	function view_list()
	{
		$this->header();

		echo "<table border=1>";
			echo "<tr>";
				echo "<th>Name</th>";
				echo "<th>Price</th>";
			echo "</tr>";

			while($rows=$this->buku->get_booksp())
			{
				echo "<tr>";
					echo "<td><a href= $_SERVER[PHP_SELF]?view=book&id=$rows[bookid]>  $rows[booktitle]  </a></td>";
					echo "<td>$rows[bookprice]</td>";
				echo "</tr>";

			}
		echo "</table>";

	}

	private function header()
	{
		echo "CATALOG <p>";
	}

	private function link()
	{
		echo "<a href=" .$_SERVER['PHP_SELF']. ">Back to catalog</a>";
	}

}
?>
