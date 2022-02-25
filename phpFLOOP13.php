<?php
# for loop

$cars = array(
	array("brand" => "Kia", "model" => "Seltos", "type" => "SUV"),
	array("brand" => "Skoda", "model" => "Octavia", "type" => "Sedan"),
	array("brand" => "Porsche", "model" => "911", "type" => "Coupe")
	);

for ($i=0; $i < count($cars); $i++) 
{ 
	echo $cars[$i]["model"] . " is a " . $cars[$i]["type"] . " car manufactured by " . $cars[$i]["brand"] . "<br><br>";
}



?>