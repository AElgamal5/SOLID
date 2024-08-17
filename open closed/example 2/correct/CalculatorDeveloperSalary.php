<?php

class CalculatorDeveloperSalary implements CalculatorSalaryInterface
{
    public function calculate(string $start_date): float
    {
        return 4000 + now()->diffInYears($start_date) * 4000;
    }
}
