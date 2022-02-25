<?php
# conditional statements
# speed given in km/hr

$speed = 130;
if ($speed <= 80) 
{
	echo "Vehicle speed is correct";
}
elseif ($speed >80 and $speed < 110) 
{
	echo "Vehicle speed is a bit over guidelines";
}
else
{
	# if $speed > 110
	echo "Vehicle speed is dangerous, must slow down";
}



?>