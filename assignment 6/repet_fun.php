<?php

/*
  Refactored repeated discount calculation into a reusable function.
  This follows the DRY (Don't Repeat Yourself) principle because
  the discount formula only needs to be written once.
 */

function calculateFinalPrice($price, $discountPercent = 10) {
    $discountAmount = $price * $discountPercent / 100;
    return $price - $discountAmount;
}

// Use the same function for different products
$movieTicket = calculateFinalPrice(250, 10);
$foodOrder = calculateFinalPrice(1000, 20);
$mobileCover = calculateFinalPrice(500); // Uses default 10%

echo "Movie Ticket: ₹" . $movieTicket . "<br>";
echo "Food Order: ₹" . $foodOrder . "<br>";
echo "Mobile Cover: ₹" . $mobileCover;

?>