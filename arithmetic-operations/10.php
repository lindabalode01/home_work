<?php
class Geometry{
    function calculateCircleArea(int $radius)
    {
        if($radius < 0)
        {
            return 'Error: radius can not be negative';
        }
        return M_PI * $radius * $radius;
    }
    function rectangleArea(int $width, int $length)
    {
        if($width < 0 || $length < 0)
        {
            return 'Error: lenght or width can not be negative';
        }
        return $length * $width;
    }
    function triangleArea(int $base, int $height)
    {
        if($base < 0 || $height < 0)
        {
            return 'Error: base and height can not be negative';
        }
        return $base * $height * 0.5;
    }
}
$geometric = new Geometry();
$geometric->calculateCircleArea(5);
