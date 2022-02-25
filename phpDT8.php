<?php
# basic boolean empty

$var_1 = null;
$var_2 = "";
$var_3 = "Hello World";

if(empty($var_1) == true)
{echo "\$var_1 is empty";}
else{echo "\$var_1 is not empty";}
echo "<br>";

if(empty($var_2) == true)
{echo "\$var_2 is empty";}
else{echo "\$var_2 is not empty";}
echo "<br>";

if(empty($var_3) == true)
{echo "\$var_3 is empty";}
else{echo "\$var_3 is not empty";}
echo "<br>";

if(empty($var_4) == true)
{echo "\$var_4 is empty";}
else{echo "\$var_4 is not empty";}


?>