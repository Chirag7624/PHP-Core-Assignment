<?php
/* 
Comparison operators used
">" → greater than
"<" → less than
"==" → equal to

if-elseif-else : this statement checks all three possible situations
*/
$restaurant1Rating = 4.2;
$restaurant2Rating = 3.8;

if ($restaurant1Rating > $restaurant2Rating) {
    echo "Restaurant 1 has a higher rating.";
} elseif ($restaurant2Rating > $restaurant1Rating) {
    echo "Restaurant 2 has a higher rating.";
} else {
    echo "Both restaurants have equal ratings.";
}

?>