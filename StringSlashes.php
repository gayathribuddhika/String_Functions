<?php

$string = "This is <img src= "image.jpg" >a string.";
$string_slashes = htmlentities(addcslashes($string));

echo $string_slashes;

?>

<br><br>

<?php

$string = "This is <img src= "image.jpg" >a string.";
$string_slashes = htmlentities($string);

echo $string_slashes;

?>