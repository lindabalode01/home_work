<?php
$listOfNumbers = [
    44,
    78,
    33,
    65,
    45,
    10,
    4
];
for ($i = 0; $i < count($listOfNumbers); $i++){
    if($listOfNumbers[$i] %3 == 0){
    echo $listOfNumbers[$i];
    echo PHP_EOL;
    }}