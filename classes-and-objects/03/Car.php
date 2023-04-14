<?php
require_once 'Odometer.php';
require_once 'FuelGauge.php';
class Car{
    private FuelGauge $fuel;
    private Odometer $odometer;
    public function __construct(FuelGauge $fuel, Odometer $odometer){
        $this->fuel = $fuel;
        $this->odometer = $odometer;
    }
    public function getFuelAmount(): float
    {
        return $this->fuel->getFuel();
    }
    public function getMilage(): float{
        return $this->odometer->getMiles();
    }
    public function drive(): void{
        $this->odometer->incrementMiles();
        $this->fuel->decrementFuel();
    }
}