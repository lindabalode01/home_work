<?php

class SavingsAccount
{
private float $balance;
private float $interest;
public function __construct(float $balance, float $interest)
{
    $this->balance = $balance;
    $this->interest = $interest;
}
public function withdraw(float $amount):void
{
    $this->balance -= $amount;
}
public function deposit(float $amount):void
{
    $this->balance += $amount;
}
public function calculateInterest(int $numOfMOnths): float
{
    $monthlyInterestRate = $this->interest / 12;
    $monthlyInterestAmount = $this->balance * $monthlyInterestRate;
    return $monthlyInterestAmount * $numOfMOnths;
}
public function balance():float
{
    return number_format($this->balance, 2);
}
}