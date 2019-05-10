<?php

$first = "sabaragamuwa university ";
$second = "of Sri Lanka"; 

$sentence = $first;
$sentence .= $second;
echo $sentence;

?>
<br>
All Simple : <?php echo strtolower($sentence);?>
<br>
All Capital : <?php echo strtoupper($sentence);?><br>
First Letter Capital : <?php echo ucfirst($sentence);?><br>
First Letter Capital in All Words : <?php echo ucwords ($sentence);?><br>
Number of Characters : <?php echo strlen($sentence); //characters are counted by including spaces also.?><br>
Search for a string or characters : <?php echo strstr($sentence,"of");?><br>
Replace : <?php echo str_replace("sabaragamuwa","Wayaba",$sentence);?> 