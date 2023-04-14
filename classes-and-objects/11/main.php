<?php
require_once 'Account.php';

$bartosAccount = new Account("Barto's account", 100.00);
$bartosSwissAccount = new Account("Barto's account in Switzerland", 1000000.00);

echo "Initial state";
echo $bartosAccount->getName().', '.$bartosAccount->balance().PHP_EOL;
echo $bartosSwissAccount->getName().', '.$bartosSwissAccount->balance().PHP_EOL;

$bartosAccount->withdraw(20);
echo "Barto's account balance is now: " . $bartosAccount->balance().PHP_EOL;
$bartosSwissAccount->deposit(200);
echo "Barto's Swiss account balance is now: ".$bartosSwissAccount->balance().PHP_EOL;

echo "Final state";
echo $bartosAccount->getName().', '.$bartosAccount->balance().PHP_EOL;
echo $bartosSwissAccount->getName().', '.$bartosSwissAccount->balance().PHP_EOL;