<?php

$name = "Mokammel Haque Heerat";
$id = "24-56219-1";
$food = "Burger";
$quantity = 6;
$price = null;
$discount = null;


switch ($food) {

    case "Burger":
        $price = 5;
        break;

    case "Pizza":
        $price = 8;
        break;
    case "Sandwich":
        $price = 4;
        break;
    case "Coffee":
        $price = 3;
}

$total = $quantity * $price;

if ($total >= 30) {
    $discount = 20;
} elseif ($total >= 20) {
    $discount = 10;
} else {
    $discount = null;
}

$discountAmt = ($total * $discount) / 100;
$final = $total - $discountAmt;


echo "Student Name : {$name} <br>";
echo "Student ID : {$id}<br><br>";
echo "Food Item : {$food}<br>";
echo "Price : {$price}<br>";
echo "Quantity : {$quantity}<br><br>";
for ($i = 0; $i < $quantity; $i++) {
    $increment = $i + 1;
    echo "Item {$increment} : {$food}<br>";
}

echo "<br>Subtotal :\${$total}<br>";
echo "Discount : {$discount} %<br>";
echo "Discount Amt : \${$discountAmt}<br>";
echo "Final Bill : \${$final}<br><br>";
echo "Thank you for Visit";
