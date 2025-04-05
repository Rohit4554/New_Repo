<?php

$string = <<<XML
<?xml version = "1.0" encoding = "UTF-8"?>
<?xml-stylesheet type = "text/css" href = "a2.css"?>

	<ItemList>
		<Item>
			<ItemName>Laptop</ItemName>
			<ItemPrice>75000</ItemPrice>
			<Quantity>10</Quantity>
		</Item>

		<Item>
                	<ItemName>Mouse</ItemName>
                	<ItemPrice>7500</ItemPrice>
                	<Quantity>15</Quantity>
        	</Item>
	
		<Item>
                	<ItemName>Keyboard</ItemName>
                	<ItemPrice>750</ItemPrice>
                	<Quantity>10</Quantity>
        	</Item>
	
		<Item>
                	<ItemName>Create</ItemName>
                	<ItemPrice>75000</ItemPrice>
                	<Quantity>10</Quantity>
        	</Item>
	
		<Item>
                	<ItemName>Laptop</ItemName>
                	<ItemPrice>75000</ItemPrice>
                	<Quantity>10</Quantity>
        	</Item>
	</ItemList>
XML;
	$fname = "Item.xml";
	$fp = fopen($fname, 'w');
	echo $fp;
	fwrite($fp, $string);
	
	if($fp)
	{	
	echo "Created File Sucessfully";
	}
	fclose($fp);
?>
