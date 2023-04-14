<?php

class Odometer{
    private float $miles;
    public function __construct(int $kilometers = 0){
        $this->miles = $kilometers;
    }
    public function getMiles(): float{
        return $this->miles;
    }
    public function incrementMiles(float $kilometers = 10): void{
        $this->miles += $kilometers;
    }
}