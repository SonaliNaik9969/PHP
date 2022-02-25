<?php
#foreach loop

$fees["Rahul"]["php"] = 10;
$fees["Rahul"]["java"] = 20;
$fees["Rahul"]["css"] = 30;

$fees["Sonam"]["php"] = 30;
$fees["Sonam"]["java"] = 40;
$fees["Sonam"]["css"] = 10;

$fees["Sumit"]["php"] = 50;
$fees["Sumit"]["java"] = 60;
$fees["Sumit"]["css"] = 40;

foreach ($fees as $values) 
{
	foreach ($values as $data) 
	{
		echo $data . "";
	}
	echo "<br>";
}



?>