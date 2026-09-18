<?php
/* in this i use this arathmatic operators 

"*" → multiplication
"/" → division
"+" → addition

*/

$ticketPrice = 250;
$numberOfTickets = 3;

// ticket total
$ticketTotal = $ticketPrice * $numberOfTickets;

//5% booking fee
$bookingFee = $ticketTotal * 5 / 100;

// final amount
$finalAmount = $ticketTotal + $bookingFee;

echo "Ticket Total: ₹" . $ticketTotal . "<br>";
echo "Online Booking Fee: ₹" . $bookingFee . "<br>";
echo "Final Amount: ₹" . $finalAmount;

?>