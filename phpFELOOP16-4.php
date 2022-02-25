<?php
# foreach loop

$arr = array('Rob', 'Bob', 'Robert', 'Bobby', 'Mr. Paulson');
$assoc = array('Brad' => 'Tyler Durden', 'Ed' => 'The narrator', 'Helena' => 'Maria Singer');


foreach ($arr as $k => $name) 
{
	 echo $k . ' - ' . $name . "<br>"; 
}

foreach ($assoc as $key => $name) 
{
	echo $key . ' - ' . $name . "<br>";
}

?>