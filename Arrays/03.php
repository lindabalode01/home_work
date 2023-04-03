<?php
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];
$valueToFind = readline('Enter the value to look for: ');
if(in_array($valueToFind, $numbers))
{
    echo 'Value is in array'.PHP_EOL;
}else{
    echo 'Value was not found'.PHP_EOL;
}