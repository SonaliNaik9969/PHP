<?php
#for loop

echo " Even factors of 200 are : " . "<br><br>";
for ($i=1; $i <= 200 ; $i++) 
{ 
	if (200 % $i == 0 and $i % 2 == 0)
	{
		echo $i . "<br>";
	}
	
}


?>