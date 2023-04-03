<?php
for($i = 1; $i <= 110; $i++)
{
    $output = $i;
    if($i % 3 == 0)
    {
        $output = 'Coza';
    }
    if($i % 5 == 0)
    {
        $output = 'Loza';
    }
    if($i % 7 == 0)
    {
        $output = 'Woza';
    }
    if($i % 3 == 0 && $i % 5 == 0)
    {
        $output = 'CozaLoza';
    }
    echo ' '.$output;
    if($i % 11 == 0)
    {
        echo PHP_EOL;
    }
}
