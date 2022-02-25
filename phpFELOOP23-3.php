<?php
# foreach loop

$age = ["bill" => 25, "steve" => 28, "elon" => 22];

echo "<ul>";
foreach ($age as $key => $value) 
{
	echo "<li>" . $key . " = " . $value . "</li>";
}



?>