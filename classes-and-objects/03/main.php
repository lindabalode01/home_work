<?php
require_once 'Car.php';
$car = new Car(
    new FuelGauge(20),
    new Odometer()
);
while ($car->getFuelAmount() > 0) {
    $car->drive();
    sleep(1);
    echo 'Miles: '.$car->getFuelAmount().PHP_EOL;
    echo 'Fuel left: '.$car->getMilage().PHP_EOL;
}