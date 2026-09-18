<?php

$foodItems = ["Pizza", "Burger", "Dosa", "Biryani", "Momos"];

for ($i = 0; $i < 5; $i++) {
    echo "Order " . ($i + 1) . ": " . $foodItems[$i] . "<br>";
}

?>


<?php

//modified food_order.php using both continue and break:

    $foodItems = ["Pizza", "Burger", "Dosa", "Biryani", "Momos"];

foreach ($foodItems as $index => $food) {

    // Skip the third food item
    if ($index == 2) {
        continue;
    }

    // Stop the loop when Biryani is reached
    if ($food == "Biryani") {
        break;
    }

    echo "Order " . ($index + 1) . ": " . $food . "<br>";
}

?>