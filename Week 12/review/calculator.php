<html>
    <body>
        <h1>  Online Store Discount Calculator  </h1>
<?php
$customerName = "Mithursan";
$storeName = "BrightMart";
$cart = [120, 80, 60, 40];

$total = 0;
foreach ($cart as $itemPrice) {
    $total += $itemPrice;
}

if ($total >= 250) {
    $discountRate = 0.20;
} 
elseif ($total >= 150 && $total < 250) {
    $discountRate = 0.10;
} 
else {
    $discountRate = 0;
}

function calculateFinalPrice($total, $discountRate = 0) {
    $finalPrice = $total - ($total * $discountRate);
    return $finalPrice;
}

function displaySummary($customerName, $total, $discountRate, $finalPrice) {
    global $storeName;
    echo "<h3>Order Summary - $storeName</h3>";
    echo "Customer Name: $customerName<br>";
    echo "Total Amount: $" . number_format($total, 2) . "<br>";
    echo "Discount Applied: " . ($discountRate * 100) . "%<br>";
    echo "Final Price: $" . number_format($finalPrice, 2) . "<br>";
}

echo "<h3>Items in Cart</h3>";
foreach ($cart as $index => $price) {
    echo "Item " . ($index + 1) . ": $" . number_format($price, 2) . "<br>";
}

$finalPrice = calculateFinalPrice($total, $discountRate);
displaySummary($customerName, $total, $discountRate, $finalPrice);
?>
</body>
</html>