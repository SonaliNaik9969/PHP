<?php
# foreach loop

$animals = array("Antelope" => "Snorts", "Bat" => "Screeches", "Bear" => "Roars", "Dolphin" => "Clicks", "Goose" => "Honks", "Vulture" => "Screams");
foreach ($animals as $name => $sound) 
{
	echo $animals[$name] . "<br>";
}


?>