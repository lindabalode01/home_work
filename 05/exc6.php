<?php
$array = [
    14,
    35,
    76,
    1.2,
    'name'
];
//var_dump($array);
function doubleAmount( $value)
{
    for ($i = 0; $i < count($value); $i++) {
        if (is_int($value[$i])) {
            echo $value[$i] * 2;
            echo PHP_EOL;
        } else {
            echo "Not a number\n";
        }
    }
}
doubleAmount($array);

