<?php

$orderAmount = 350;

if ($orderAmount < 200) {
    echo "No discount";
} elseif ($orderAmount >= 200 && $orderAmount <= 499) {
    echo "10% discount";
} else {
    echo "20% discount";
}


/* 
Conditions i used in it :

Below ₹200 → No discount
₹200 to ₹499 → 10% discount
₹500 or above → 20% discount

*/
?>