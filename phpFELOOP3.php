<?php
# foreach loop

$numbers = array(51, 55, 76, 33, 83, 3, 58, 5, 14, 18, 3, 35, 98, 56, 91, 32);

$lowest = $numbers[0];
foreach ($numbers as $num) 
{
	if ($num < $lowest) 
	{
		$lowest = $num;
	}
}
echo $lowest;


?>