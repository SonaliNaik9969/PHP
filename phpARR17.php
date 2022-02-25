<?php
# multidimensional array

$marks = array(
		"Jack" => array("physics" => 35, "maths" => 30, "chemistry" => 39),
		"Tony" => array("physics" => 30, "maths" => 32, "chemistry" => 29),
		"Sara" => array("physics" => 31, "maths" => 22, "chemistry" => 39)
		);

$average["Jack"] = ($marks["Jack"]["physics"] + $marks["Jack"]["maths"] + $marks["Jack"]["chemistry"]) / 3;

$average["Tony"] = ($marks["Tony"]["physics"] + $marks["Tony"]["maths"] + $marks["Tony"]["chemistry"]) / 3;

$average["Sara"] = ($marks["Sara"]["physics"] + $marks["Sara"]["maths"] + $marks["Sara"]["chemistry"]) / 3;

$average["Jack"] = round($average["Jack"], 2);

$average["Tony"] = round($average["Tony"], 2);

$average["Sara"] = round($average["Sara"], 2);

echo "Average marks of Jack, Tony and Sara are : " . $average["Jack"] . ", " . $average["Tony"] . ", " . $average["Sara"] . 
" respectively";



?>