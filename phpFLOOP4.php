<?php
# for loop

# op not matched 
# sum of all numbers from 12 - 27 = 312
# sum of all even numbers from 12 - 27 = 152
# sum of all odd numbers from 12 - 27 = 160


$sum = null;
for ($i=12; $i <= 27 ; $i++) 
{ 
	if ($i % 2 == 0)
	{
		$sum += $i;
	}
	
}
echo $sum;

?>