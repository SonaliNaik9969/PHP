<?php
# foreach loop

$users = array(
	array("name" => "Tom", "age" => 21, "dob" => "2000-02-15", "city" => "Mumbai"),
	array("name" => "Jack", "age" => 18, "dob" => "2003-03-07", "city" => "Delhi"),
	array("name" => "Lena", "age" => 16, "dob" => "2004-07-21", "city" => "Mumbai"),
	array("name" => "James", "age" => 20, "dob" => "2001-06-09", "city" => "Banglore"),
	array("name" => "Peter", "age" => 23, "dob" => "1997-06-13", "city" => "Hyderabad"),
	array("name" => "Albert", "age" => 24, "dob" => "1996-08-23", "city" => "Kerala"),
	array("name" => "Albert", "age" => 22, "dob" => "1999-03-12", "city" => "Kerala"),
);

foreach ($users as $us) 
{
	if ($us["name"] == "Albert" and $us["age"] == 22 and $us["city"] == "Kerala") 
	{
		echo "This user exists";
	}
}



?>