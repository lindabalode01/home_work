<?php

class Video
{
private string $title;
private array $ratings;
private bool $isCheckedOut;

public function __construct(string $title)
{
    $this->title = $title;
    $this->isCheckedOut = false;
    $this->ratings = [];
}
public function checkOut(): void
{
    $this->isCheckedOut = true;
}
public function getAvarageRaiting(): string
{
    return array_sum($this->ratings) / count($this->ratings);
}
public function return():void
{
    $this->isCheckedOut = false;
}
public function getTitle(): string
{
    return $this->title;
}
public function getCheckedOut(): bool
{
    return $this->isCheckedOut;
}
public function getRating(int $rate): void
{
    $this->ratings[] = $rate;
}
}