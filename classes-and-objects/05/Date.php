<?php

class Date
{
private string $month;
private int $year;
private int $date;
public function __construct(string $month, int $year, int $date)
{
    $this->month = $month;
    $this->year = $year;
    $this->date = $date;
}
public function setMonth(string $month): void{
    $this->month = $month;
}
public function setYear(int $year): void{
$this->year = $year;
}
public function setDate(int $date): void{
$this->date = $date;
}
public function getMonth(): string{
    return $this->month;
}
public function getYear(): int{
    return $this->year;
}
public function getDate(): int{
    return $this->date;
}
public function displayDate(): string{
    return $this->getMonth().'/'.$this->getDate().'/'.$this->getYear();
}
}