<?php
require_once 'BankAccount.php';
$ben = new BankAccount('Ben', 12343);
echo $ben->showNameAndBalance();