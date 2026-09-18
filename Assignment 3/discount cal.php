<?php
/* Operators used

"*" → multiplication
"/" → division
"-" → subtraction
"=" → assignment

*/
 
$productPrice = 2000;
$discountPercentage = 20;

//discount amount
$discountAmount = $productPrice * $discountPercentage / 100;

//price after discount
$productPrice = $productPrice - $discountAmount;

echo "Original Price: ₹2000<br>";
echo "Discount: 20%<br>";
echo "Price After Discount: ₹" . $productPrice;

?>