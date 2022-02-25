<!DOCTYPE html>
<html>
<head>
	<style>
		table, th, td
		{
			border: 1px solid black;
		}
		table
		{
			border-collapse: collapse;
		}
		th, td
		{
			padding-right: 10px;
			padding-left: 10px;
		}
		
	</style>
</head>
<body>

<?php
# foreach loop

$lighting_drums = array(
	"texas" => array("total_seats" => "800", "booked_seats" => "773", "time" => "8:30 pm"),
	"california" => array("total_seats" => "1000", "booked_seats" => "805", "time" => "9:00 pm"),
	"sydney" => array("total_seats" => "2000", "booked_seats" => "1684", "time" => "9:30 pm"),
	"dubai" => array("total_seats" => "2500", "booked_seats" => "2204", "time" => "7:00 pm"),
	"goa" => array("total_seats" => "1200", "booked_seats" => "1104", "time" => "10:00 pm")
);
?>

<h3>concert schedule of lighting drums</h3>

<table>
	<tr> <th> City </th> <th> total seats </th> <th> booked seats </th> <th> concert time </th> </tr>


<?php
foreach ($lighting_drums as $key => $ld) 
{
	# ld = lighting drums
	echo "<tr><td>" . $key . "</td><td>" . $ld["total_seats"] . "</td><td>" . $ld["booked_seats"] . "</td><td>" . $ld["time"] . "</td></tr>" ;
}

?>
</table>
</body>
</html>