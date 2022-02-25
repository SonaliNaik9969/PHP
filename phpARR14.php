<?php
# multidimensional array

$cars = array(
		array("brand" => "Kia", "model" => "Seltos", "type" => "SUV"),
		array("brand" => "Skoda", "model" => "Octavia", "type" => "Sedan"),
		array("brand" => "Porsche", "model" => "911", "type" => "Coupe")
		);

echo $cars[0]["model"] . " is a " . $cars[0]["type"] . " car manufactured by " . $cars[0]["brand"] . "<br>" ;
echo $cars[1]["model"] . " is a " . $cars[1]["type"] . " car manufactured by " . $cars[1]["brand"] . "<br>" ;
echo $cars[2]["model"] . " is a " . $cars[2]["type"] . " car manufactured by " . $cars[2]["brand"] . "<br>" ;


?>