<?php
require_once 'SavingsAccount.php';
$usersBalance = (float)readline('Enter your account balance: ');
$usersInterestRate = (float)readline('Enter your interest rate: ');
$numOfMonths = (int)((float)readline('Enter number of months you have this account: '));

$userA = new SavingsAccount($usersBalance, $usersInterestRate);

$totalDeposit = 0;
$totalWithdraw = 0;
for($i = 1; $i < $numOfMonths; $i++)
{
    $usersDeposit = (float)readline('Enter amount you would like to deposit for month nr'.$i.': ');
    $userA->deposit($usersDeposit);
    $totalDeposit += $usersDeposit;

    $usersWithdraw = (float)readline('Enter amount you would like to withdraw for month nr'.$i.': ');
    $userA->withdraw($usersWithdraw);
    $totalWithdraw += $usersWithdraw;
}
$intereseEarned = $userA->calculateInterest($usersInterestRate);
$endingBalance = $userA->balance();
echo 'Total deposit: ' . $totalDeposit.PHP_EOL;
echo 'Total withdraw: ' . $totalWithdraw.PHP_EOL;
echo 'Interest earned: ' . $intereseEarned.PHP_EOL;
echo 'Ending Balance: ' .($endingBalance + $intereseEarned).PHP_EOL;
