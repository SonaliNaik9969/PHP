<?php
# foreach loop

$students = array(
	array('Name' => 'Mark', 'Age' => 15, 'weight' => 46),
	array('Name' => 'John', 'Age' => 13, 'weight' => 65),
	array('Name' => 'Tom', 'Age' => 14, 'weight' => 56)
);

foreach ($students as $student => $innerArray) 
{
	echo '<b>' . $student . '</b>' . '<br>';
	foreach($innerArray as $item)
	{
		echo $item . '<br>';
	}
}

?>