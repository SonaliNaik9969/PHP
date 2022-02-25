<?php
# associative array (str indexes instead of numeric indexes)
# str indexes(keys) cannot contain blank spaces

$sentence = "The memory of that scene for me is like a frame of film forever frozen at that moment : ";
$phrases = array("white" => "the white house", "green" => "the green lawn", "blue" => "the blue sky");

echo $sentence . $phrases["white"] . "," . $phrases["green"] . "," . $phrases["blue"];

?>