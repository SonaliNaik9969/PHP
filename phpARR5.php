<?php
# numeric array
# print_r
 
$fruit = array("apples");
$fruit[] = 48000;
$fruit[] = 10 + 5;
$fruit[] = "3 months";
$fruit[] = "400 kg fertilizer";

echo "It took " . $fruit[3] . " and " . $fruit[4] . " to grow " . $fruit[1] . "&nbsp" . $fruit[0] . ". The cost price of an apple is Rs.10 and will be sold at Rs." . $fruit[2];
echo "<br>";

print_r($fruit);



?>