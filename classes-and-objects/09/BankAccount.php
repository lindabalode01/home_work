<?php

class BankAccount
{
    private string $name;
    private int $balance;
public function __construct(string $name, int $balance)
{
    $this->name = $name;
    $this->balance = $balance / 100;
}
private function getName(): string
{
    return $this->name;
}
private function getBalance(): int
{
    return number_format(abs($this->balance), 2);
}
public function showNameAndBalance():string
{
    return $this->getName().', $'.$this->getBalance();
}
}