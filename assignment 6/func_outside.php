<?php

// Variable outside the function
$couponCode = "SAVE20";

function applyCoupon() {
    global $couponCode;

    echo "Coupon applied: " . $couponCode;
}

// Call the function
applyCoupon();

?>