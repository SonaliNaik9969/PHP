<?php
# switch case

$day = "Saturday";
switch ($day) 
{
	case "Monday":
		echo "Burger of the day is : Corn and Spinach";
		break;

	case "Tueday":
		echo "Burger of the day is : Spicy Panner";
		break;

	case "Wednesday":
		echo "Burger of the day is : Crispy Veg";
		break;

	case "Thursday":
		echo "Burger of the day is : Aloo Tikki";
		break;

	case "Friday":
		echo "Burger of the day is : Chicken Cheese";
		break;

	case "Saturday":
		echo "Burger of the day is : Spicy Chicken and Mayo";
		break;

	case "Sunday":
		echo "Burger of the day is : Chicken Kabab";
		break;

	default:
	echo "No burger available for this day";
	
}

?>