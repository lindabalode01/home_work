<?php
$firstArray = [];
for($i = 0; $i < 10; $i++)
{
    $firstArray[$i] = rand(1, 100);
}
$secondArray = $firstArray;
$firstArray[9] = -7;
echo 'Array 1 : ';
for($i = 0; $i < count($firstArray); $i++)
{
    echo $firstArray[$i].', ';
}
echo PHP_EOL;
echo 'Array 2 : ';
for($i = 0; $i < count($secondArray); $i++)
{
    echo $secondArray[$i].', ';
}