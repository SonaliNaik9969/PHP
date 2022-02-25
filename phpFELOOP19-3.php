<?php
#foreach loop

$person = ['name' => 'Brad', 'surname' => 'Traversy', 'age' => 30, 'hobbies' => ['Tennis', 'Video Games']];

foreach ($person as $key => $value) 
{
	if ($key == 'hobbies') 
	{
		break;
	}
	echo $value . "<br>";
}


?>