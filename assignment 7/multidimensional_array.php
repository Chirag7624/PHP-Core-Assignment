<?php

// Multidimensional array 
$orders = [
    [
        "restaurant" => "Domino's Pizza",
        "items" => ["Margherita Pizza", "Garlic Bread"],
        "total" => 450
    ],
    [
        "restaurant" => "Burger King",
        "items" => ["Veg Burger", "French Fries", "Coke"],
        "total" => 380
    ],
    [
        "restaurant" => "South Indian Cafe",
        "items" => ["Masala Dosa", "Idli"],
        "total" => 250
    ]
];

foreach ($orders as $orderNumber => $order) {

    echo "<h3>Order " . ($orderNumber + 1) . "</h3>";

    echo "Restaurant: " . $order["restaurant"] . "<br>";

    echo "Items:<br>";

    foreach ($order["items"] as $item) {
        echo "- " . $item . "<br>";
    }

    echo "Total: ₹" . $order["total"] . "<br>";
    echo "<hr>";
}

?>