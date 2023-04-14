<?php
require_once 'Dog.php';


$dogs = [
    $max = new Dog('Max', 'male'),
    $rocky = new Dog('Rocky', 'male'),
    $sparky = new Dog('Sparky', 'male'),
    $buster = new Dog('Buster', 'male'),
    $sam = new Dog('Sam', 'male'),
    $max = new Dog('Max', 'male'),
    $lady = new Dog('Lady', 'female'),
    $molly = new Dog('Molly', 'female'),
    $coco = new Dog('Coco', 'female')
];
$max->setMotherName($lady);
$max->setFatherName($rocky);
$coco->setMotherName($molly);
$coco->setFatherName($buster);
$rocky->setMotherName($molly);
$rocky->setFatherName($sam);
$buster->setMotherName($lady);
$buster->setFatherName($sparky);

echo $max->name.' gender '.$max->gender.', mothers name  '.$max->getMotherName().', fathers name '.$max->getFatherName().PHP_EOL;
echo $coco->name.' gender '.$coco->gender.', mothers name  '.$coco->getMotherName().', fathers name '.$coco->getFatherName().PHP_EOL;
echo $rocky->name.' gender '.$rocky->gender.', mothers name  '.$rocky->getMotherName().', fathers name '.$rocky->getFatherName().PHP_EOL;
$max->ifHasSameMother($rocky);
$max->ifHasSameMother($coco);
$max->ifHasSameMother($buster);


