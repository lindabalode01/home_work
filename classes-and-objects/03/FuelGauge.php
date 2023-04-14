<?php

class FuelGauge{
    private float $fuel;
    public function __construct(float $fuel = 0){
        $this->fuel = $fuel;
    }
    public function getFuel(): float{
        return $this->fuel;
    }
//    public function incrementFuel(float $fuel = 1): void{
//        if($this->fuel >= 70) return;
//        $this->fuel += $fuel;
//    }
    public function decrementFuel(float $amount = 5): void{
        $this->fuel -= $amount;
    }
}