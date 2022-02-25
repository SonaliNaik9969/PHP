<?php
# foreach loop

$students = array('Vinod', 'Bahadur', 'Thapa', 'ThapaTechnical');

echo "<ol>";
foreach ($students as $names) 
{
	echo "<li>" . $names . "</li>";
}
echo "</ol>"
?>