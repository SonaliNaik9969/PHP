<?php
# foreach loop

$cities = array("Italy" => "Rome", "France" => "Paris", "India" => "Delhi", "New York" => "Albany");
foreach ($cities as $key => $value) 
{
	echo "Capital of " . $key . " is " . $value . "<br>";
}




?>