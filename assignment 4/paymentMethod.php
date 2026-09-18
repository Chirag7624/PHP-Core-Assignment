<?php

$paymentChoice = 1;

switch ($paymentChoice) {
    case 1:
        echo "UPI";
        break;

    case 2:
        echo "Credit Card";
        break;

    case 3:
        echo "Wallet";
        break;

    case 4:
        echo "Cash";
        break;

    default:
        echo "Invalid option";
}

?>