<?php
# foreach loop

$paper2 = array(
	"Copier" => "Copier & Multipurpose", 
	"Inkjet" => "Inkjet Printer", 
	"Laser" => "Laser Printer", 
	"Photo" => "Photographic Paper");


foreach ($paper2 as $item => $description) 
{
	echo "$item : $description <br>";
	
}


?>