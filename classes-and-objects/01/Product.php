<?php

class Product
{
    private string $name;
    private float $price;
    private int $amount;
    public function __construct(string $name, float $price, int $amount){
        $this->name = $name;
        $this->price = $price;
        $this->amount = $amount;
    }
    public function printProduct(): string{
        return $this->name.', '.$this->price.' EUR, '.$this->amount.' units.'.PHP_EOL;
    }
    public function setPrice(float $price): void{
        $this->price = $price;
    }
    public function setAmount(string $amount): void{
        $this->amount = $amount;;
    }}