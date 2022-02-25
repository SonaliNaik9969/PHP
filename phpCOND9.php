<?php
# switch case

$continent = "Asia";
switch ($continent) 
{
	case "Europe":
		echo "The population of " . "$continent" . " is 74.64 crores";
		break;

	case "Asia":
		echo "The population of " . "$continent" . " is 456.07 crores";
		break;

	case "South America":
		echo "The population of " . "$continent" . " is 42.25 crores";
		break;

	case "North America":
		echo "The population of " . "$continent" . " is 57.9 crores";
		break;

	case "Africa":
		echo "The population of " . "$continent" . " is 121.61 crores";
		break;

	case "Antarctica":
		echo "The population of " . "$continent" . " is 1,000";
		break;

	case "Oceania":
		echo "The population of " . "$continent" . " is 5.49 lacs";
		break;
	
	default:
		echo "Invalid continent";
		break;
}


?>