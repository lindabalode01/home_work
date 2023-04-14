<?php

class Dog
{
public string $name;
public string $gender;
public ?Dog $mother;
public ?Dog $father;
public function __construct(string $name, string $gender)
{
    $this->name = $name;
    $this->gender = $gender;
    $this->mother = null;
    $this->father = null;
}
public function setFatherName(Dog $father): void
{
    $this->father = $father;
}
public function setMotherName(Dog $mother): void
{
    $this->mother = $mother;
}
public function ifHasSameMother($otherDog): bool
{
    if($this->mother == $otherDog->mother){
        echo 'True';
        return true;
    }
    echo 'False';
    return false;
}
public function getMotherName(): string
{
    return $this->mother->name;
}
public function getFatherName(): string
{
    return $this->father->name;
}
}