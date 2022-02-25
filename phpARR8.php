<?php
# associative array (str indexes instead of numeric indexes)
# str indexes(keys) cannot contain blank spaces

$marks = array("Science" => 88, "Maths" => 82, "Grammar" => 92, "History" => 97, "Computer" => 79, "Chemistry" => 85);

echo "These are the marks of Ben " . "<br>";
echo "Science : " . $marks["Science"] . "<br>";
echo "Maths : " . $marks["Maths"] . "<br>";
echo "Grammar : " . $marks["Grammar"] . "<br>";
echo "History : " . $marks["History"] . "<br>";
echo "Computer : " . $marks["Computer"] . "<br>";
echo "Chemistry : " . $marks["Chemistry"];

?>