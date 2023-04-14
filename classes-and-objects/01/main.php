<?php
require_once 'Product.php';

$product1 = new Product('Logitech mouse', 70.00, 13);
$product2 = new Product('IPhone 5', 999.99, 3);
$product3 = new Product('Epson EB-U05', 440.46, 1);
echo $product1->printProduct();
echo $product2->printProduct();
echo $product3->printProduct();

