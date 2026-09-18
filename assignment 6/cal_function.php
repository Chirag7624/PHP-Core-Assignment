<?php

function calculateFinalPrice($price, $discountPercent = 10) {
    $discountAmount = $price * $discountPercent / 100;
    $finalPrice = $price - $discountAmount;

    return $finalPrice;
}

// with discount percentage
echo "Price with 20% discount: ₹" . calculateFinalPrice(1000, 20);
echo "<br>";

// without discount percentage
echo "Price with default 10% discount: ₹" . calculateFinalPrice(1000);

?>