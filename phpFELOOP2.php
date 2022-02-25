<?php
# foreach loop

$numbers = array(51, 55, 76, 33, 83, 3, 58, 1, 14, 18, 3, 35, 98, 56, 91, 32);

$highest = $numbers[0];
foreach ($numbers as $num) 
{
	if ($num > $highest) 
	{
		$highest = $num;
	}
}
echo $highest;


?>