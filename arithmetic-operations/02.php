<?php
function checkOdEvenNumber(int $number):string
{
    if($number % 2 == 0)
    {
        return 'Even'.PHP_EOL;
    }
    return 'Odd'.PHP_EOL;
}
echo checkOdEvenNumber(8);
