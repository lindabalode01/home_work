<?php
function createNumberProduct(int $startNumber, int $endNumber):int
{
$productOfNumbers = 1;
    for($i = $startNumber; $i <= $endNumber; $i++)
    {
        $productOfNumbers *= $i;
    }
    return $productOfNumbers;
}
echo createNumberProduct(1, 10).PHP_EOL;