<?php

require_once "data/Product.php";

$product = new Product("Apple", 10000);
$productDummy = new ProductDummy("Orange", 15000);

echo $product->getName() . PHP_EOL;
echo $product->getPrice() . PHP_EOL;

echo $productDummy->infoName() . PHP_EOL;