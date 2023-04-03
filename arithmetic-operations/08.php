<?php
function calculateSalary(int $hours, float $basePay):string
{
    $regularPay = $hours * $basePay;
    if($basePay < 8)
    {
        return 'Salary can not be less then $8 an hour'.PHP_EOL;
    }
    if($hours > 60)
    {
        return 'Employee  can noy work more then 60 hours a week'.PHP_EOL;
    }
    if($hours <= 60)
    {
        $overPay = ($hours - 40) * ($basePay * 1.5);
        $totalPay = $overPay + $regularPay;
        return 'with overtime $'.number_format($totalPay, 2).PHP_EOL;
    }
    return '$'.number_format($regularPay, 2).PHP_EOL;
}


echo 'Employee 1 = '.calculateSalary(35, 7.5);
echo 'Employee 2 = '.calculateSalary(32, 8.2);
echo 'Employee 3 = '.calculateSalary(47, 8.2);
echo 'Employee 4 = '.calculateSalary(72, 10);