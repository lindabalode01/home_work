<?php declare(strict_types = 1);
function createProduct( string $name, int $price): stdClass{
    $product = new stdClass();
    $product->name = $name;
    $product->price = $price;
    return $product;
}
function formatNumber(int $price): string
{
    return'$'.number_format($price / 100, 2);
}
$products = [
    'a1' => createProduct('Coffee', 180),
    'a2' => createProduct('Black tea', 140),
    'b1' => createProduct('Hot chocolate', 210),
    'b2' => createProduct('Fresh juice', 275)


];
$coins = [200, 100, 50, 20, 10, 5, 2, 1];

echo "Welcome to vending machine!\n";
echo "Available products: \n";
echo "=========================\n";
foreach ($products as $code => $product) {
    echo 'Code ' . $code . ' ' . $product->name . ' Price ' . formatNumber($product->price). PHP_EOL;
}
$selectedProductCode = readline('Enter product code to select a product: ');
$selectedProduct = $products[$selectedProductCode];
if(!array_key_exists($selectedProductCode, $products)){
    echo 'Invalid code'.PHP_EOL;
    exit;
}

    echo 'You selected ' . $selectedProduct->name. ' price ' . formatNumber($selectedProduct->price). PHP_EOL;
$amount = 0;
while($amount < $selectedProduct->price)
{
    $insertedCoin = (int)((float)readline('Insert coin: ') * 100);
    $amount += $insertedCoin;
    if(!in_array($insertedCoin, $coins))
    {
        echo 'Invalid coin'.PHP_EOL;
        continue;
    }
    if($amount < $selectedProduct->price)
    {
        echo 'Remaining amount '.formatNumber($selectedProduct->price - $amount).PHP_EOL;
    }
}
$change = $amount - $selectedProduct->price;
echo 'Receive your change'. ' '.formatNumber($change).PHP_EOL;
while($change > 0)
{
    foreach ($coins as $coin)
    {
        $coinAmount = intdiv($change,$coin);
        $change -= $coin * $coinAmount;
        if($coinAmount > 0)
        {
            echo formatNumber($coin).' x '.$coinAmount.PHP_EOL;
        }

    }
}

