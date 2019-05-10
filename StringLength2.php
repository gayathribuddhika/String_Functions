<?php

$string = "Universities in Sri Lanka";
$string_length = strlen($string);

echo $string_length;

?>

<br><br>

<?php

$string = "this is a php document";
$string_length = strlen($string);

if($string_length<20){
	echo "You are selected";
}else{
	echo "You are not selected";
}

?>