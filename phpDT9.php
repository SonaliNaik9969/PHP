<?php
# basic boolean isset

$var_1 = null;
$var_2 = "";
$var_3 = "Hello World";

if (isset($var_1) == true) 
{echo "\$var_1 has been declared";}
else{echo "\$var_1 has either not been declared or has the value of null";}
echo "<br>";

if (isset($var_2) == true) 
{echo "\$var_2 has been declared";}
else{echo "\$var_2 has either not been declared or has the value of null";}
echo "<br>";

if (isset($var_3) == true) 
{echo "\$var_3 has been declared";}
else{echo "\$var_3 has either not been declared or has the value of null";}
echo "<br>";

if (isset($var_4) == true) 
{echo "\$var_4 has been declared";}
else{echo "\$var_4 has either not been declared or has the value of null";}


?>