<?php
function numberSum()
{
    $lowerBound = 1;
    $upperBound = 100;
    $sum = 0;
    for($count = $lowerBound; $count <= $upperBound; $count++)
    {
        $sum += $count;
    }
    echo 'Sum of '.$lowerBound.' and '.$upperBound.' is '.$sum.PHP_EOL;
    echo 'The average is '.($lowerBound + $upperBound) / 2;;
}
echo numberSum();
