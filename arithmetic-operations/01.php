<?php
function checkNumbers(int $firstNumber, int $secondNumber):bool
{
    if($firstNumber == 15 || $secondNumber == 15)
    {
        echo 'true'.PHP_EOL;
        return true;
    }
    if(($firstNumber + $secondNumber) == 15 || ($firstNumber - $secondNumber) == 15 || ($secondNumber - $firstNumber) == 15)
    {
        echo 'true'.PHP_EOL;
        return true;
    }
    echo 'false'.PHP_EOL;
    return false;
}
checkNumbers(5, 20);
