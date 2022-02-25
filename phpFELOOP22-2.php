<?php
# foreach loop with numeric array
# $name = array("Rahul", "Soham", "Sumit", "Priti");
# using endforeach

$name[0] = "Rahul";
$name[1] = "Soham";
$name[2] = "Sumit";
$name[3] = "Priti";

foreach ($name as $key => $value) :

	echo $key . " " . $value . "<br>";
	endforeach;



?>