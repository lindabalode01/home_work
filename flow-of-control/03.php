<?php
function countDigits(int $positiveNumber): int
{
    $numberToString = strval($positiveNumber);
    return strlen($numberToString) ;
}

echo countDigits(136567);