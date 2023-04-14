<?php

class Points{
    public int $x;
    public int $y;
    function __construct(int $x, int $y){
        $this->x = $x;
        $this->y = $y;
    }
    public function swapPoints(&$p1, &$p2): void{
        $tempX = $p1->x;
        $tempY = $p1->y;
        $p1->x = $p2->x;
        $p1->y = $p2->y;
        $p2->x = $tempX;
        $p2->y = $tempY;
    }
}