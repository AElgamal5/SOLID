<?php


class CalculatorSupportSalary implements CalculatorSalaryInterface
{
    public function calculate(string $start_date): float
    {
        return 3000 + now()->diffInYears($start_date) * 3000;
    }
}
