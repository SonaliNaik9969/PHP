<?php
# foreach loop

$classes = ["English" => "Mr. Shakeapear", "History" => "Mr. Abraham", "Science" => "Mrs. Amelia Airheart"];
$students = [
	"English" => ["Avery", "Johnny", "Tim", "Sarah"],
	"History" => ["Ronnie", "George"],
	"Science" => ["Alisha", "Jimmy"]
];


foreach ($classes as $class => $teacher) 
{
	$students_list = implode(',', $students[$class]);
	echo "{$class} is taught by {$teacher} and has the following students : {$students_list} " . "<br>";

}

?>