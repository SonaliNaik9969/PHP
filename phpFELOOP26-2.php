<?php
# foreach with associative array

$fees = array("Rahul" => 500, "Sonam" => 600, "Sumit" => 700);
foreach ($fees as $keys => $money) 
{
	echo $keys . " = " . $money . "<br>";
}



?>