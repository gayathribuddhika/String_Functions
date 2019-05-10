<?php

$string = "Sabaragamuwa University of Sri Lanka";
$string_shuffled = str_shuffle($string);

echo $string_shuffled;

?>

<br><br>

<?php

$string = "abcdefghijklmnop0123456789";
$string_shuffled = str_shuffle($string);

echo $string_shuffled;

?>

<br><br>

<?php

$string = "abcdefghijklmnop0123456789";
$string_shuffled = str_shuffle($string);

$half1 = substr($string_shuffled,0,7);
echo $half1;

echo "<br>";

$half2 = substr($string_shuffled,0,strlen($string)/2);
echo $half2;

?>