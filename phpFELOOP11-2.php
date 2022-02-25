<?php
# foreach loop

$classes = ["English" => "Mr. Shakeapear", "History" => "Mr. Abraham", "Science" => "Mrs. Amelia Airheart"];
foreach ($classes as $class => $teacher) 
{
	echo "{$class} is taught by {$teacher}" . "<br>";
}

?>