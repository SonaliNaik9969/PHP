<?php
# basic boolean is_null

$var_1 = null;
$var_2 = "Hello World";

if(is_null($var_1) == true)
	{echo "\$var_1 is null";}
else {echo "\$var_1 is not null";}
echo "<br>";

if(is_null($var_2) == true)
	{echo "\$var_2 is null";}
else {echo "\$var_2 is not null";}


?>