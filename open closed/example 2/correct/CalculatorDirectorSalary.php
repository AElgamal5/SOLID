<?php

class CalculatorDirectorSalary implements CalculatorSalaryInterface
{
    public function calculate(string $start_date): float
    {
        return 5000 + now()->diffInYears($start_date) * 5000;
    }
}
