<?php
	$xml = simplexml_load_file("bookinfo.xml");
	foreach($xml -> book as $book)
	{
		echo "Book no = $book->bookno "."<br>\n";
		echo "Book Name = $book->bookname"."<br>\n";
		echo "Book Author = $book->authorname"."<br>\n";
		echo "price = $book->price"."<br>\n";
		echo "Year = $book->year"."<br>\n";

	}
?>
