<?php


$surveyed = 12467;
$purchasedEnergyDrinks = 0.14;
$preferCitrusDrinks = 0.64;

function calculateEnergyDrinkers(int $numberSurveyed, float$purchasedDrink): int
{
return round($numberSurveyed * $purchasedDrink);
}

function calculatePreferCitrus(int $numberSurveyed, float $preferCitrus): int
{
return round($numberSurveyed * $preferCitrus);}


echo "Total number of people surveyed " . $surveyed.PHP_EOL;
echo "Approximately " . calculateEnergyDrinkers($surveyed, $purchasedEnergyDrinks) . ' bought at least one energy drink'.PHP_EOL;
echo  calculatePreferCitrus($surveyed, $preferCitrusDrinks).' of those " . "prefer citrus flavored energy drinks.'.PHP_EOL;
