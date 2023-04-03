<?php
function calculatePersonsBmi(float $weightInKg, int $heightInCm): string
{
    $weightInLbs =$weightInKg * 2.20462;
    $heightInInches = $heightInCm * 0.393701;
    $bmiCount = $weightInLbs * 703 / ($heightInInches * $heightInInches);
    if($bmiCount < 18)
    {
        return 'You are under weight! Your bmi is '.number_format($bmiCount, 2).PHP_EOL;
    }
    if($bmiCount <= 25)
    {
        return 'Your weight is optimal! Your bmi is '.number_format($bmiCount, 2).PHP_EOL;
    }
    return 'You are overweight! Your bmi is '.number_format($bmiCount, 2).PHP_EOL;

}
echo calculatePersonsBmi(32, 155);
echo calculatePersonsBmi(132, 145);
echo calculatePersonsBmi(65, 165);



