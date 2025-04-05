<?php
	$dom = new DomDocument();
	$xmlfile = "movies.xml";
	$root = $dom->CreateElement("Movies");
	$classical = $dom->CreateElement("Classical");
	$mn = $dom->CreateElement("MovieTitle", "ABC");
	$classical->appendChild($mn);
	$an = $dom->CreateElement("ActorName", "Shah Rukh Khan");
	$classical->appendChild($an);
	$re = $dom->CreateElement("ReleaseYear", "1977");
	$classical->appendChild($re);
	$root->appendChild($classical);
	

	$horror = $dom->CreateElement("Horror");
        $mn = $dom->CreateElement("MovieTitle", "ABC");
        $horror->appendChild($mn);
        $an = $dom->CreateElement("ActorName", "Salman Khan");
        $horror->appendChild($an);
        $re = $dom->CreateElement("ReleaseYear", "1988");
        $horror->appendChild($re);
        $root->appendChild($horror);
        $dom->appendChild($root);

 	$Action = $dom->CreateElement("Action");
        $mn = $dom->CreateElement("MovieTitle", "ABC");
        $Action->appendChild($mn);
        $an = $dom->CreateElement("ActorName", "Unsafe Ali Khan");
        $Action->appendChild($an);
        $re = $dom->CreateElement("ReleaseYear", "1988");
        $Action->appendChild($re);
        $root->appendChild($Action);

	$dom->save("movies.xml");

?>
