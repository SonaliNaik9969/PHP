<?php
# foreach loop

$marks = array(
	"Jack" => array("physics" => 35, "maths" => 30, "chemistry" => 39),
	"Tony" => array("physics" => 30, "maths" => 32, "chemistry" => 29),
	"Sara" => array("physics" => 31, "maths" => 22, "chemistry" => 39)
);

foreach ($marks as $key => $mark) 
{
	$average[$key] = ($mark["physics"] + $mark["maths"] + $mark["chemistry"]) / 3;
	$average[$key] = round($average[$key] , 2);
}

echo "Average marks of " . "<br>";
foreach ($average as $key => $value) 
{
	echo $key . " are " . $value . "<br>";
}

?>