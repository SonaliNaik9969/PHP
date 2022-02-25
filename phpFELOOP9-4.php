<?php
# foreach loop

$numbers = array(1, 2, 3, 4, 5);
print_r($numbers);

foreach ($numbers as &$number) 
{
	$number = $number * 2;
}

echo "<br>";
print_r($numbers)


?>