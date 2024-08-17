<?php

class CalculatorDesignerSalary implements CalculatorSalaryInterface
{
    public function calculate(string $start_date): float
    {
        return 4500 + now()->diffInYears($start_date) * 4500;
    }
}
