<?php

class Account
{
    private string $name;
    private float $balance;
    public function __construct(string $name, float $balance)
    {
        $this->name = $name;
        $this->balance = $balance;
    }
    public function withdraw(int $amount)
    {
        $this->balance -= $amount;
    }
    public function deposit(int $amount)
    {
        $this->balance += $amount;
    }
public function balance(): float{
        return $this->balance;
}
public function getName(): string
{
    return $this->name;
}
}