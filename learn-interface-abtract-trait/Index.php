<?php
require_once 'Traits/Loggable.php';
require_once 'Interfaces/Discountable.php';
require_once 'AbstractClasses/Product.php';
require_once 'Classes/ElectronicProduct.php';
require_once 'Classes/Order.php';

use Classes\ElectronicProduct;
use Classes\Order;
// Create some products
$laptop = new ElectronicProduct(1, "Laptop", 999, "HP", "ModelY");
$phone = new ElectronicProduct(2, "Smartphone", 599, "Lenovo", "g5080");

// Apply discounts
$laptop->applyDiscount(10);
// $phone->applyDiscount();

// Create an order
$order = new Order("ORD-".rand(1000, 9999));
$order->addToCart($laptop);
$order->addToCart($phone);

// Display the order
$order->displayOrder();
