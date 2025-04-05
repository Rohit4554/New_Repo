<?php
	$dom = new DomDocument();
	$dom->load("movie.xml");
	echo "Movie Details\n";
	
	$movie = $dom->getElementsByTagName("Movie");
  	
 		
	foreach($movie as $val)
	{
		$movieName = $val->getElementsByTagName("MovieTitle");
		$mn = $movieName->item(0)->nodeValue;	
		$movieActor = $val->getElementsByTagName("ActorName");
		$ma = $movieActor->item(0)->nodeValue;
		echo $mn."\n";
		echo $ma."\n\n";
		
	}
	
?>	
