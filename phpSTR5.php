<?php
# string replace

$str = "The quick brown fox";
$str2 = "jumped over the brown dog";

$str = str_replace("The", "That", $str);
$str2 = str_replace("lazy", "brown", $str2);

echo $str . "&nbsp" . $str2;

?>