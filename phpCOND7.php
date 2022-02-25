<?php
# switch case

$favSport = "cricket";
switch ($favSport) 
{
	case "hockey":
		echo "Your favorite sport is Hockey !";
		break;

	case "cricket":
		echo "Your favorite sport is Cricket !";
		break;

	case "football":
		echo "Your favorite sport is Football !";
		break;

	case "badminton":
		echo "Your favorite sport is Badminton !";
		break;

	default:
		echo "Your favorite sport is neither Hockey, Tennis , nor Golf !";
		break;
}



?>