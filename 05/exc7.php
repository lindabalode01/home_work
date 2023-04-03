<?php
$person = new stdClass();
$person->name = 'John';
$person->cash = 5000;
$person->licenses = ['A', 'F'];

$knife = new stdClass();
$knife->name = 'Knife';
$knife->cash = 800;
$knife->licenses = 'A';

$gun = new stdClass();
$gun->name = 'Gun';
$gun->cash = 2000;
$gun->licenses = 'C';

$weapons = [
    'gun' => $gun,
    'knife' => $knife
];
$money = $person->cash / 100;
$license = implode(',', $person->licenses);
echo "Welcome, $person->name, Your credit is $$money, Your licenses [$license] \n";
echo PHP_EOL;
echo "We have in stock: \n";
foreach ($weapons as $key=>$weapon)
{
    $prices = $weapon->cash / 100;
    echo "[$key] $weapon->name, price $$prices, license required $weapon->licenses \n";
}
$selection = readline("Please select a product ");
if(!array_key_exists($selection, $weapons)){
    echo 'Weapon not found';
    exit;
}
$selectedWeapon = $weapons[$selection];
if(!in_array($selectedWeapon->licenses, $person->licenses)){
    echo 'Invalid license';
    exit;
}
if($person->cash < $selectedWeapon->cash){
    echo 'Not enough money';
}

