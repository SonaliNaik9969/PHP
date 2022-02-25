<?php
# associative array (str indexes instead of numeric indexes)
# str indexes(keys) cannot contain blank spaces

$age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
echo "Peter is " . $age["Peter"] . " years old" . "<br>";
echo "Ben is " . $age["Ben"] . " years old" . "<br>";
echo "Joe is " . $age["Joe"] . " years old";

?>