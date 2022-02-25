<?php
# foreach loop

$customers = array("name_1" => "Steve", "name_2" => "Jessica", "name_3" => "Max", "name_4" => "Jenny");
$orders = array(
			"Steve" => "2 boxes of biscuits and 50 packets of instant noodles",
			"Jessica" => "5 mango ice-cream tubes, 10 strawberry ice-cream boxes, 20 chocolate cones",
			"Max" => "8 sets of fewer tablets, 20 bottles of cough medicine",
			"Jenny" => "10 dozen eggs, 30 liter milk, 5 kg paneer and 35 cubes of cheese"
		);

foreach ($customers as $cust) 
{
	echo $cust . "'s" . " order : " . $orders[$cust] . "<br><br>";
}

?>