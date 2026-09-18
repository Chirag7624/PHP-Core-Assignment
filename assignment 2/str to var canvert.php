<?php
/* task 2 : Write PHP code to convert a string variable containing '123.45' into an integer 
and a float, then use var_dump() to show the result of each conversion.
<br><br><em><strong>Hint:</strong> Use (int) and (float) for type casting.</em>  */ 


$string = "123.45";

// str to int
$integerValue = (int)$string;

// str to float
$floatValue = (float)$string;

var_dump($integerValue);
echo "<br>";

var_dump($floatValue);


?>