<?php
$randNumber = rand(1, 100);
//echo $randNumber.PHP_EOL;
echo 'Lets play a number guessing game!'.PHP_EOL;
echo 'Im thinking of a number  between 1 and 100'.PHP_EOL;
$usersGues = (int)readline('Enter a number: ');
if($usersGues > $randNumber)
{
    echo 'Sorry, you are too high.  I was thinking of '. $randNumber;
}
if($usersGues < $randNumber)
{
    echo 'Sorry, you are too low.  I was thinking of '. $randNumber;
}
if($usersGues == $randNumber)
{
    echo 'You guessed it!  What are the odds?!?';
}